<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<script src="https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.min.js"></script>
<script>mermaid.init({noteMargin: 10}, ".lang-mermaid");</script>

<?php $this->need('header.php'); ?>


    <div class="post-container">
        <div class="post-detail gt-bg-theme-color-second">
            <article class="gt-post-content">
                <h2 class="post-title"><?php $this->title() ?></h2>
                <div class="post-info">
                    <time class="post-time gt-c-content-color-first">
                        · <?php $this->date(); ?> ·
                    </time>
                    
					<?php if(  count($this->tags) == 0 ): ?>
					<?php _e('# '); ?>
					<?php $this->category(' # ', true, 'none'); ?>
					<?php else: ?>
					<?php _e('# '); ?>
					<?php $this->tags(' # ', true, 'none'); ?>
					<?php endif; ?>
                    
                </div>
                <div class="post-content">
				<?php parseContent($this); ?>

                </div>
            </article>
			
        </div>
		
		<div class="post-detail pl" id="plsx">
				
				<?php $this->need('comments.php'); ?>
		
        </div>			

        
            <div class="next-post">
                <div class="gt-c-content-color-first" style="margin-bottom: 24px;">下一篇</div>
				<div class="post-title gt-a-link">
				<?php $this->thePrev('%s','没有了'); ?>
				</div>
            </div>
			
<?php $this->need('footer.php'); ?>