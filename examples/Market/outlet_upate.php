<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 04.07.18
 * Time: 22:58
 */
use Yandex\Market\Partner\Models\Outlet;
/** @var Outlet $outlet */
$outlet = $outlet;

?>
<form method="post" action="outlet_upated.php">
    <label for="name"> name</label><input type="text" name="name" value="<?php echo $outlet->getName() ?>" id="name"><br>
    <label for="type"> type</label><input type="text" name="type" value="<?php echo $outlet->getType() ?>" id="type"><br>
    <label for="coords"> coords</label><input type="text" name="coords" value="<?php echo $outlet->getCoords() ?>" id="coords"><br>
    <label for="isMain"> isMain</label><input type="text" name="isMain" value="<?php echo $outlet->getIsMain() ?>" id="isMain"><br>
    <label for="visibility"> visibility</label><input type="text" name="visibility" value="<?php echo $outlet->getVisibility() ?>" id="visibility"><br>

    <input type="hidden" readonly="readonly" name="outletId" value="<?php echo $outlet->getId() ?>">
    <br>
    <input type="submit" value="Update">
</form>
