<h2>Item</h2>

<?php
$attributes = array('class'=>'form','id'=>'items','name'=>'items');
echo form_open('items/save', $attributes);
?>
    <div class="form-item">
        <label for="title">Title</label>
        <input type="input" name="title" id="title" class="controls" value=""/>
    </div>

    <div class="form-item">
        <label for="quantity">Quantity</label>
        <input type="input" name="quantity" id="quantity" class="controls" value=""/>
    </div>

    <div class="form-item">
        <label for="price">Price</label>
        <input type="input" name="price" id="price" class="controls" value=""/>
    </div>

    <div class="form-item button-row">
        <button type="submit" name="submit" id="submit" class="btn">Save</button>
    </div>
    
</form>