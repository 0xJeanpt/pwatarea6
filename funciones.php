<?php
function formatearFecha($fecha) {
    return date("d/m/Y", strtotime($fecha));
}
