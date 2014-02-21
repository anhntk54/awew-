<article class="category-post-alt1">            
    <div class="entry-thumb hover-image-alt1 picture">
        <?php echo Articles::model()->getThumIndex($row);?>
    </div>
    <h3 class="entry-title">
        <a href="<?php echo Articles::model()->getTitleURL($row);?>"><?php echo $row->title;?></a>
    </h3>
    <ul class="entry-meta">
        <li class="posted-date"><?php echo Articles::model()->getDate($row);?></li>
        <li class="posted-comments"><a href="post.html">23 Comments</a></li>
    </ul>
    <div class="entry-content">
        <p><?php $row->short_description;?></p>
        <a href="post.html" class="more-link">Read more</a>
    </div>
</article>  