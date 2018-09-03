

<?php include (ROOT.'/views/layouts/header.php'); ?>

       <div id="content">
            <table class = "tab">  
            <tr><th>Наименование услуги</th><th>Стоимость услуги</th><th>Примечание</th></tr>
            <?php foreach ($PriceItem as $Item):?>
            <tr><td><div id = "nametab"><?php echo $Item['nameservice'] ?></div></td><td><?php echo $Item['price'] ?></td><td><?php echo $Item['notice'] ?></td></tr>
            <?php endforeach; ?>
            </table>
            <div class="text"> 
                <h3>ВНИМАНИЕ !!!</h3>
                <p>&nbsp; Минимальная сумма заказа составляет: </p>
                <p><img src='/images/mark3.png'>&nbsp;в Автозаводском и Центральном районах - 700 руб.; </p>
                <p><img src='/images/mark3.png'>&nbsp;в Комсомольском и Шлюзовом районах - 900 руб.;</p>
                <p><img src='/images/mark3.png'>&nbsp;в пригороде г.о. Тольятти - от 1000 руб.;</p>
                <p><img src='/images/mark3.png'>&nbsp;по Ставропольскому району и иным направления Самарской области - по договоренности.</p>
                
            </div>
       </div><!-- конец content -->

<?php include (ROOT.'/views/layouts/footer.php'); ?>
