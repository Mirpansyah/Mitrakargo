<?php
if (isset($_GET['home'])) {
  include "content/home.php";
} elseif (isset($_GET['kecil'])) {
    include "content/kecil.php";
} elseif (isset($_GET['sedang'])) {
    include "content/sedang.php";
} elseif (isset($_GET['besar'])) {
	include "content/besar.php";
} else {
    include "content/home.php";
}

?>