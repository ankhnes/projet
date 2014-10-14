<html>
    <head>
        <title>
            create product
        </title>
    </head>
    <body>
        <form method="post">
            <label>Model</label>
            <input name="model" type="text"></br>
            <label>Reference</label>
            <input name="reference" type="text"></br>
            <label>Description</label>
            <textarea name="description"></textarea></br>
            <label>Prix</label>
            <input name="price" type="number"></br>
            <label>Prix promotionnel</label>
            <input name="specialPrice" type="number"></br>
            <label>Categorie</label>
            <select name="idCategory">
                <?php foreach ($aCategory as $category){ ?>
                <option value="<?php echo $category->id ?>">
                    <?php echo $category->name; ?>
                </option>    
                <?php } ?>
            </select></br>
            
            <select name="idBrand">
                <?php foreach ($aBrand as $brand){ ?>
                <option value="<?php echo $brand->id ?>">
                    <?php echo $brand->name; ?>
                </option>    
                <?php } ?>
            </select></br>
            
            <select name="availability">
                <?php foreach ($aAvailability as $availability){ ?>
                <option value="<?php echo $availability ?>">
                    <?php echo $availability; ?>
                </option>    
                <?php } ?>
            </select></br>
            
            <input type="submit" name="submit" value="Save">

        </form>
    </body>
</html>

