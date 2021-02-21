<?php
/**
 * 一款移植 <a target="_blank" href="https://github.com/imhanjie/gridea-theme-pure">IMHANJIE</a>  设计的主题 <br /> 默认内置 "简约白"、"暗夜黑"、"银光灰"、"墨草绿" 4 种配色方案。
 * 
 * @package Pure
 * @author imhanjie,夏目贵志
 * @version 0.3
 * @link https://xiamuyourenzhang.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 
 
        <div class="post-list-container">
    <div class="post-inner">
        
		<!--  文章置顶 
                        
                            <span class="sticky-top-flag gt-bg-accent-color-first">置顶</span>
    
        -->
			<?php if($this->is('index') && $this->_currentPage == 1):  //判断是否是首页 分页不输出  - 这段删了就是全站置顶了 ?>
			<?php if ($this->options->sticky): $this->options->sticky(); //输出后台设置的手动置顶?>
			<?php endif; ?>			
			<?php endif; ?>
	
		 <?php while($this->next()): ?> 
            <div class="post gt-bg-theme-color-second">
                <div class="post-left">
                    <div>
                        
                        <a href="<?php $this->permalink() ?>">
                            <span class="post-title gt-c-content-color-first"><?php $this->title() ?></span>
                        </a>
                    </div>
                    <div class="gt-post-content post-abstract gt-c-content-color-second">
                        <p><?php $this->excerpt('180','...');  ?></p>

                    </div>
                    <div class="post-info">
                        <time class="post-time gt-c-content-color-first">
                            发布于 · <?php $this->date(); ?> ·
                        </time>
						
					<?php if(  count($this->tags) == 0 ): ?>
					<?php _e('# '); ?>
					<?php $this->category(' # ', true, 'none'); ?>
					<?php else: ?>
					<?php _e('# '); ?>
					<?php $this->tags(' # ', true, 'none'); ?>
					<?php endif; ?>
					
					 <!-- printTag($this);   php 自定义标签样式-->     
							
                    </div>
                </div>

				<?php if(yotu($this)==1): ?>
							<a href="<?php $this->permalink() ?>" class="post-feature-image"
							   style="background-image: url('<?php showThumbnail($this); ?>')">
							</a>				
				<?php else: ?>	
					<!-- 不存在 -->  
				<?php endif;?>
           
            </div>
		<?php endwhile; ?>
        
    </div>
</div>

<div class="pagination-container">

<?php $this->pageLink('上一页'); ?>
当前页码：<?php if($this->_currentPage>1) echo $this->_currentPage; else echo 1;?>
总页码：<?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?>
<?php $this->pageLink('下一页','next'); ?>


</div>

 
 
 
<?php $this->need('footer.php'); ?>