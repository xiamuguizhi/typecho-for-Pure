			<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

			<div class="site-footer gt-c-content-color-first">
				<div class="slogan gt-c-content-color-first">Keep Alive.</div>
				<div class="social-container">

					<?php if ($this->options->socialHomepage): ?>
					<a href="<?php $this->options->socialHomepage(); ?>" target="_blank">
						<i class="fas fa-house gt-c-content-color-first"></i>
					</a>
					<?php endif; ?>

					<?php if ($this->options->socialTwitter): ?>
					<a href="<?php $this->options->socialTwitter(); ?>" target="_blank">
						<i class="fab fa-twitter gt-c-content-color-first"></i>
					</a>
					<?php endif; ?>

					<?php if ($this->options->socialFacebook): ?>
					<a href="<?php $this->options->socialFacebook(); ?>" target="_blank">
						<i class="fab fa-facebook gt-c-content-color-first"></i>
					</a>
					<?php endif; ?>

					<?php if ($this->options->socialWeibo): ?>
					<a href="<?php $this->options->socialWeibo(); ?>" target="_blank">
						<i class="fab fa-weibo gt-c-content-color-first"></i>
					</a>
					<?php endif; ?>

					<?php if ($this->options->socialBilibili): ?>
					<a href="<?php $this->options->socialBilibili(); ?>" target="_blank">
						<i class="fab fa-bilibili gt-c-content-color-first"></i>
					</a>
					<?php endif; ?>

					<?php if ($this->options->socialYouTube): ?>
					<a href="<?php $this->options->socialYouTube(); ?>" target="_blank">
						<i class="fab fa-youtube gt-c-content-color-first"></i>
					</a>
					<?php endif; ?>

					<?php if ($this->options->socialGitHub): ?>
					<a href="<?php $this->options->socialGitHub(); ?>" target="_blank">
						<i class="fab fa-github gt-c-content-color-first"></i>
					</a>
					<?php endif; ?>

					<?php if ($this->options->socialGitLab): ?>
					<a href="<?php $this->options->socialGitLab(); ?>" target="_blank">
						<i class="fab fa-gitlab gt-c-content-color-first"></i>
					</a>
					<?php endif; ?>

					<?php if ($this->options->socialLinkedIn): ?>
					<a href="<?php $this->options->socialLinkedIn(); ?>" target="_blank">
						<i class="fab fa-linkedin gt-c-content-color-first"></i>
					</a>
					<?php endif; ?>

					<?php if ($this->options->socialCoffee): ?>
					<a href="<?php $this->options->socialCoffee(); ?>" target="_blank">
						<i class="fas fa-coffee gt-c-content-color-first"></i>
					</a>
					<?php endif; ?>

					<?php if ($this->options->socialEMailTo): ?>
					<a href="<?php $this->options->socialEMailTo(); ?>" target="_blank">
						<i class="fas fa-envelope gt-c-content-color-first"></i>
					</a>
					<?php endif; ?>

				</div>
				<div class="footer-info">
					<?php if ($this->options->ICPbeian): ?>
					<p><a href="https://beian.miit.gov.cn/" target="_blank" rel="nofollow"><?php $this->options->ICPbeian(); ?></a></p>
					<?php endif; ?>
					<?php if ($this->options->footerContent): $this->options->footerContent(); ?>
					<?php endif; ?>
				</div>
				<div>
					Theme by <a href="https://xiamuyourenzhang.cn/" target="_blank">Xiamu</a> | Powered by <a href="https://typecho.org/" target="_blank">Typecho</a> | <a href="<?php $this->options->feedUrl(); ?>" target="_blank">RSS</a>
				</div>
			</div>
			<?php if ($this->options->consolePanelBan == 'able'): ?>
			<script>
				// default options
				ConsoleBan.init()
				// custom options
				ConsoleBan.init({
					redirect: '<?php $this->options->themeUrl("console.html"); ?>'
				})
			</script>
			<?php else: ?>

			<?php endif; ?>

			<script type="text/javascript" src="<?php $this->options->themeUrl("js/img-lazy.js"); ?>"></script>
			<script type="text/javascript" src="<?php $this->options->themeUrl("js/moment.js"); ?>"></script>
			<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.min.js"></script>
			<script>mermaid.init({noteMargin: 10}, ".lang-mermaid");</script>
			<?php if ($this->options->top == 'able'): ?>
			<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/fz6m/lamu-leimu-button@1.2/dist/lamu-leimu.min.js"></script>
			<?php else: ?>
			<?php endif; ?>
			<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/nprogress@0.2.0/nprogress.min.js"></script>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xiamuguizhi/oss/css/noticejs1.min.css?ver=v0.0.3" />
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xiamuguizhi/oss/css/animate.min.css?ver=v0.0.1" />
			<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/xiamuguizhi/oss/js/notice.min.js"></script>
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
