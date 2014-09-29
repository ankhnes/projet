<html>
    <head>
        <title>
            create product
        </title>
    </head>
    <body>
        <form method="post">
            <input name="reference" type="text"></br>
            <input name="marque" type="text"></br>
            <textarea name="description"></textarea></br>
            <input name="price" type="number"></br>
            <input name="specialPrice" type="number"></br>
            
            <select name="idCategory">
                <?php foreach ($aCategory as $category){ ?>
                <option value="<?php echo $category->id ?>">
                    <?php echo $category->name; ?>
                </option>    
                <?php } ?>
            </select>
            
            <select name="idBrand">
                <?php foreach ($aBrand as $brand){ ?>
                <option value="<?php echo $brand->id ?>">
                    <?php echo $brand->name; ?>
                </option>    
                <?php } ?>
            </select>
            
            <select name="availability">
                <?php foreach ($aAvailability as $availability){ ?>
                <option value="<?php echo $availability->id ?>">
                    <?php echo $availability->name; ?>
                </option>    
                <?php } ?>
            </select>
            
            <input type="submit" name="submit" value="Save">
        </form>
    </body>
</html>

