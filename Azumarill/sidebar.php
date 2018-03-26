<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


  <div class="sidebar">
      
             <div class="z_overlay">
        <!-- stars -->
        <div class="star star-1"></div>
        <div class="star star-2"></div>
        <div class="star star-3"></div>
        <!-- clouds -->
        <div class="cloud-group-1">
            <div class="cloud cloud-1"></div>
            <div class="cloud cloud-2"></div>
            <div class="cloud cloud-3"></div>
            <div class="cloud cloud-4"></div>
            <div class="cloud cloud-5"></div>
            <div class="cloud cloud-6"></div>
        </div>
        <div class="cloud-group-2">
            <div class="cloud cloud-1"></div>
            <div class="cloud cloud-2"></div>
            <div class="cloud cloud-3"></div>
            <div class="cloud cloud-4"></div>
            <div class="cloud cloud-5"></div>
            <div class="cloud cloud-6"></div>
        </div>
        <div class="cloud-group-3">
            <div class="cloud cloud-1"></div>
            <div class="cloud cloud-2"></div>
            <div class="cloud cloud-3"></div>
            <div class="cloud cloud-4"></div>
            <div class="cloud cloud-5"></div>
            <div class="cloud cloud-6"></div>
        </div>
        <!-- orbits -->
        <div class="orbit orbit-1"></div>
        <div class="orbit orbit-2"></div>
        <div class="orbit orbit-3"></div>
        <div class="orbit orbit-4"></div>
        <div class="orbit orbit-5"></div>
        <div class="orbit orbit-6"></div>
        <!-- main planet -->
        <div class="ring-before"></div>
        <div class="ring-bigger-before"></div>
        <div class="planet"></div>
        <div class="ring-after"></div>
        <div class="ring-bigger-after"></div>
        <!-- sub planet -->
        <div class="sub-planet"></div>
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