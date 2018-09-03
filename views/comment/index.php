

<?php include (ROOT.'/views/layouts/header.php'); ?>

        <div id="content">
            <div id="comment">
                <?php foreach ($CommentItem as $Item):?>
                    <div id="commentbloc">
                        <p><?php echo $Item['nicname'].' '.$Item['data'];?></p>
                        <hr>
                        <p><?php echo $Item['comment']?></p>
                    </div>
                <?php endforeach; ?>
                <div class="text">
            <form action="/setcomments" method="POST">
                <textarea id ="formcomment" name="comment"  placeholder="Ваш комментарий" cols="20" rows="5" maxlength = "250"></textarea>
                <p><input type="text" name="nicname" required placeholder="Ваше имя" maxlength = "50"></p>
                <p><input type="submit"></p>
              
            </form>
                </div>
            </div>    
        </div><!-- конец content -->

<?php include (ROOT.'/views/layouts/footer.php');?>
        