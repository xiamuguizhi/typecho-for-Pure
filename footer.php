<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        <div class="site-footer gt-c-content-color-first">
    <div class="slogan gt-c-content-color-first">Keep Alive.</div>
    <div class="social-container">
        
            
                <a href="<?php if ($this->options->GitHub): $this->options->GitHub(); ?> <?php endif; ?>" target="_blank">
                    <i class="fab fa-github gt-c-content-color-first"></i>
                </a>
               
            
                <a href="<?php if ($this->options->weibo): $this->options->weibo(); ?> <?php endif; ?>" target="_blank">
                    <i class="fab fa-weibo gt-c-content-color-first"></i>
                </a>
         
        
    </div>
    <div class="footer-info">
			<?php if ($this->options->ICPbeian): ?>
			<p><a href="http://www.beian.miit.gov.cn" target="_blank" rel="nofollow"><?php $this->options->ICPbeian(); ?></a></p>
			<?php endif; ?>
			<?php if ($this->options->footerContent): $this->options->footerContent(); ?>
			<?php endif; ?>
    </div>
    <div>
        Theme by <a href="https://xiamuyourenzhang.cn/" target="_blank">Xiamu</a>, Powered by <a href="http://typecho.org/" target="_blank">Typecho | <a href="<?php $this->options->feedUrl(); ?>" target="_blank">RSS</a></a>
    </div>
</div>
<?php if ($this->options->f12 == 'able'): ?>
  <script>
    // default options
    ConsoleBan.init()
    // custom options
    ConsoleBan.init({
      redirect: '<?php $this->options->themeUrl("js/console.html"); ?>'
    })
  </script>
<?php else: ?>

<?php endif; ?>

<script src="<?php $this->options->themeUrl("js/Walker-img.js"); ?>" type="text/javascript"></script>
<script src="<?php $this->options->themeUrl("js/moment.min.js"); ?>" type="text/javascript"></script>

<?php if ($this->options->top == 'able'): ?>
<script src="https://cdn.jsdelivr.net/gh/fz6m/lamu-leimu-button@1.2/dist/lamu-leimu.min.js"></script>
<?php else: ?>
<?php endif; ?>
<script src='https://cdn.jsdelivr.net/npm/nprogress@0.2.0/nprogress.min.js'></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xiamuguizhi/oss/css/noticejs1.css?ver=v0.0.3">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xiamuguizhi/oss/css/animate.css?ver=v0.0.1">
<script src="https://cdn.jsdelivr.net/gh/xiamuguizhi/oss/js/notice.js"></script> 
<script type="text/javascript">
	new NoticeJs({
	   text: '页面加载完成~',
	   position: 'topRight',
	   animation: {
		   open: 'animated bounceInRight',
		   close: 'animated bounceOutLeft'
	   }
	}).show();	
	</script>
    </div>
</div>
<?php $this->footer(); ?>
</body>
</html>
