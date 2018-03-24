<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


  <div class="sidebar">
        <div class="z_overlay">
        </div>
            
        <div class="z_basic">
           
              <a href="<?php $this->options->siteUrl(); ?>" class="z_portrait">   <img src="<?php $this->options->themeUrl('/img/avatar.png'); ?>" alt="DawninShadow" class="z_userPortait"></a>
              <a href="<?php $this->options->siteUrl(); ?>">  <h1><?php $this->options->title() ?></h1></a>
                <h2><?php $this->options->description() ?></h2>
            <div class="z_nav">
        
            <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
            <?php while ($category->next()): ?><a href="<?php $category->permalink(); ?>"><?php $category->name(); ?></a><?php endwhile; ?>
        
            </div>
            <ul class="z_function">
              
            <?php if($this->user->hasLogin()): ?>
				<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> </a></li>
            <?php else: ?>
                <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录博客'); ?></a></li>
            <?php endif; ?>
            <li><a herf="#"> /ヽ(•̀ω•́ )ゝ/</a></li>
             <li><a herf="#"> 回到主页 </a></li>
            </ul>
        </div>
   
       
        
       
    </div>