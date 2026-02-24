<?php

// Inicializar el carrito si no existe
if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = array();
}

// Definir precios de paquetes
$precios_paquetes = array(
    "explorador" => 3500,
    "aventurero" => 6800,
    "experiencia-total" => 12500,
    "familiar" => 18000,
    "inmersion-cultural" => 8900,
    "escapada-express" => 2200
);

// AGREGAR PAQUETE AL CARRITO
if (isset($_POST["agregar_paquete"])) {
    $paquete = $_POST["paquete"];
    $cantidad = isset($_POST["cantidad"]) ? (int)$_POST["cantidad"] : 1;
    
    if (array_key_exists($paquete, $precios_paquetes)) {
        // Si el paquete ya existe en el carrito, incrementar cantidad
        if (isset($_SESSION["carrito"][$paquete])) {
            $_SESSION["carrito"][$paquete] += $cantidad;
        } else {
            $_SESSION["carrito"][$paquete] = $cantidad;
        }
        
        echo "<div class='alerta alerta-exito'>¡PAQUETE AGREGADO AL CARRITO!</div>";
    } else {
        echo "<div class='alerta alerta-error'>PAQUETE NO VÁLIDO</div>";
    }
}

// ELIMINAR PAQUETE DEL CARRITO
if (isset($_POST["eliminar_paquete"])) {
    $paquete = $_POST["paquete"];
    
    if (isset($_SESSION["carrito"][$paquete])) {
        unset($_SESSION["carrito"][$paquete]);
        echo "<div class='alerta alerta-exito'>PAQUETE ELIMINADO DEL CARRITO</div>";
    }
}

// ACTUALIZAR CANTIDAD DE PAQUETE
if (isset($_POST["actualizar_cantidad"])) {
    $paquete = $_POST["paquete"];
    $cantidad = (int)$_POST["cantidad"];
    
    if (isset($_SESSION["carrito"][$paquete]) && $cantidad > 0) {
        $_SESSION["carrito"][$paquete] = $cantidad;
        echo "<div class='alerta alerta-exito'>CANTIDAD ACTUALIZADA</div>";
    } elseif ($cantidad <= 0) {
        unset($_SESSION["carrito"][$paquete]);
        echo "<div class='alerta alerta-info'>PAQUETE ELIMINADO (CANTIDAD 0)</div>";
    }
}

// VACIAR CARRITO COMPLETO
if (isset($_POST["vaciar_carrito"])) {
    $_SESSION["carrito"] = array();
    echo "<div class='alerta alerta-info'>CARRITO VACIADO</div>";
}

// FUNCIÓN PARA CALCULAR TOTAL
function calcularTotal() {
    global $precios_paquetes;
    $total = 0;
    
    if (isset($_SESSION["carrito"]) && count($_SESSION["carrito"]) > 0) {
        foreach ($_SESSION["carrito"] as $paquete => $cantidad) {
            if (array_key_exists($paquete, $precios_paquetes)) {
                $total += $precios_paquetes[$paquete] * $cantidad;
            }
        }
    }
    
    return $total;
}

// FUNCIÓN PARA MOSTRAR CARRITO
function mostrarCarrito() {
    global $precios_paquetes;
    
    if (!isset($_SESSION["carrito"]) || count($_SESSION["carrito"]) == 0) {
        return "<p style='text-align:center; color:#5E5E5E;'>Tu carrito está vacío</p>";
    }
    
    $html = "<div style='background: rgba(255,255,255,0.9); padding:20px; border-radius:15px; margin:20px 0;'>";
    $html .= "<h3 style='color:#8B4A23; text-align:center; margin-bottom:20px;'>🛒 Tu Carrito de Paquetes</h3>";
    
    $nombres_paquetes = array(
        "explorador" => "Explorador",
        "aventurero" => "Aventurero",
        "experiencia-total" => "Experiencia Total",
        "familiar" => "Familiar",
        "inmersion-cultural" => "Inmersión Cultural",
        "escapada-express" => "Escapada Express"
    );
    
    foreach ($_SESSION["carrito"] as $paquete => $cantidad) {
        if (array_key_exists($paquete, $precios_paquetes)) {
            $precio = $precios_paquetes[$paquete];
            $subtotal = $precio * $cantidad;
            $nombre = $nombres_paquetes[$paquete];
            
            $html .= "<div style='border-bottom:1px solid #C97A40; padding:15px 0; display:flex; justify-content:space-between; align-items:center;'>";
            $html .= "<div>";
            $html .= "<strong style='color:#8B4A23; font-size:1.2em;'>$nombre</strong><br>";
            $html .= "<span style='color:#5E5E5E;'>Precio unitario: $" . number_format($precio, 2) . " MXN</span><br>";
            $html .= "<span style='color:#5E5E5E;'>Cantidad: $cantidad</span>";
            $html .= "</div>";
            $html .= "<div style='text-align:right;'>";
            $html .= "<strong style='color:#4E8B61; font-size:1.3em;'>$" . number_format($subtotal, 2) . " MXN</strong><br>";
            $html .= "<form method='POST' style='display:inline;'>";
            $html .= "<input type='hidden' name='paquete' value='$paquete'>";
            $html .= "<button type='submit' name='eliminar_paquete' style='background:#E53935; color:white; border:none; padding:5px 15px; border-radius:5px; cursor:pointer; margin-top:5px;'>Eliminar</button>";
            $html .= "</form>";
            $html .= "</div>";
            $html .= "</div>";
        }
    }
    
    $total = calcularTotal();
    $html .= "<div style='margin-top:20px; padding-top:20px; border-top:2px solid #F6B93B; text-align:right;'>";
    $html .= "<h2 style='color:#8B4A23;'>TOTAL: $" . number_format($total, 2) . " MXN</h2>";
    $html .= "<p style='color:#5E5E5E; font-size:0.9em; margin:10px 0;'>IVA incluido</p>";
    $html .= "<form method='POST' style='display:inline; margin-right:10px;'>";
    $html .= "<button type='submit' name='vaciar_carrito' style='background:#F4A100; color:white; border:none; padding:10px 20px; border-radius:5px; cursor:pointer;'>Vaciar Carrito</button>";
    $html .= "</form>";
    $html .= "<a href='../html/reservas.php' style='background:#4E8B61; color:white; padding:10px 20px; border-radius:5px; text-decoration:none; display:inline-block;'>Proceder a Reservar</a>";
    $html .= "</div>";
    $html .= "</div>";
    
    return $html;
}

// OBTENER NÚMERO DE ITEMS EN CARRITO
function contarItemsCarrito() {
    if (!isset($_SESSION["carrito"])) {
        return 0;
    }
    
    $total = 0;
    foreach ($_SESSION["carrito"] as $cantidad) {
        $total += $cantidad;
    }
    
    return $total;
}
?>