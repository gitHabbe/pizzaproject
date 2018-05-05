<?php
function isActive($suffix)
{
    if (basename($_SERVER["SCRIPT_NAME"]) == $suffix) {
        return "is-active";
    }
    return "is-primary";
}
function setTitle()
{
    switch (basename($_SERVER["SCRIPT_NAME"])) {
        case "index.php":
            return "Home";
            break;
        
        default:
            return "Undefiend title";
            break;
    }
}