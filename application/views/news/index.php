<link type = "text/css" rel="stylesheet" href="<?php echo base_url()?>assets/index.css">
<div class="news">

<ul>
<?php foreach ($news as $news_item): ?>
	
	
	<li class="content"> 
	
    <h3><?php echo $news_item['title'] ?></h3>
    
    <div class="news_item">
        <?php echo $news_item['text'] ?>
    </div>
    
    <p>
    <a href="<?php echo site_url('news/view')."/". $news_item['slug'] ?>">View article</a> 
    <a href="<?php echo site_url('news/delete')."/". $news_item['slug'] ?>">Delete</a>
    </p>
    
    </li>

<?php endforeach ?>
</ul>
</div>