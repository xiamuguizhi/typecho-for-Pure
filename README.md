## 前言

这是一款移植 `Gridea For Pure` 的 Typecho 主题。第一眼看到这款主题就被她所吸引,简洁美观大气很适合我文艺生活类博客写作。我花了一天就移植好了，但是我博客图片比较多为了用户体验增加了 `pjax` 和 `AJAX` 评论这花了我大部分时间。所以在今天我准备发布了，希望你们喜欢（拖延症无解）~ 

我是小白很多代码很乱，很多细节不懂优化。有问题请自行完善哈 😅

## 声明

主题作者：[imhanjie][1]

原项目地址：[Github][2]

感谢期间 [小赵同学][3] 的友情测试和大力支持再次非常感谢！

## 介绍

一款移植 `Gridea For Pure` 的主题，默认内置 "简约白"、"暗夜黑"、"银光灰"、"墨草绿" 4 种配色方案。另外还：

- 支持自定义配色。
- 移动端页面适配。
- 图片幻灯片预览。
- 文章图片懒加载。
- 无刷新PJAX支持。
- AJAX评论支持。
- 手动文章置顶。
- 内置访客访问自动推送文章到百度。

## 预览

示例站点：[https://xiamuyourenzhang.cn/][4]

![请输入图片描述][5]

![请输入图片描述][6]

![请输入图片描述][7]

![请输入图片描述][8]

## 主题设置

看图参考没什么特别的，就是手动文章置顶看后面详解~！

![请输入图片描述][9]

## 文章置顶

哈哈 这是我搞静态博客的时候的一大特色，我知道typecho有置顶插件或者非置顶插件实现置顶的办法。但是我感觉太有麻烦还要查询数据库添加一大堆代码，其实无非就是复制粘贴的事情！！

步骤如下:

1.找到要置顶文章，右键查看源代码

![请输入图片描述][10]

2.添加 `<span class="sticky-top-flag gt-bg-accent-color-first">置顶</span>` 插入到A链接前面，粘贴到主题外挂设置 `文章手动置顶` 就行

```HTML

<div class="post gt-bg-theme-color-second">
               <div class="post-left">
                              <div>
                                     <span class="sticky-top-flag gt-bg-accent-color-first">置顶</span> 

                                             <a href="https://xiamuyourenzhang.cn/article/20.html"> <span class="post-title gt-c-content-color-first">漳州龙海南太武爬山游记</span> 
                                             </a>
                              </div>
                              <div class="gt-post-content post-abstract gt-c-content-color-second">
                                             <p>阿辉那天问我要不要去爬山，他每周天休息都会去爬山风雨无阻。我一想他每次都叫我去，我总拒绝不好（ps：我太懒了）于是就答应约好这周天一起去“漳州南太武”一起爬山。声明本文图片拍摄于：2019年11月24号 文章均为回忆，有些细节记得不是很清楚了本文出现人物：啊辉 开泰 两个我的好朋友 <夜爬滚蛋谷>就是和他们一起去的！本人没有文笔，就...</p>
                              </div>
                              <div class="post-info">
                                             <time class="post-time gt-c-content-color-first">发布于 · 2020-03-15 ·</time>#	<a href="https://xiamuyourenzhang.cn/category/article/">生活记录</a> 
                                             <!-- printTag($this); php 自定义标签样式-->
                              </div>
               </div>
               <a href="https://xiamuyourenzhang.cn/article/20.html" class="post-feature-image" style="background-image: url('https://xiamu-1251327481.cos.ap-guangzhou.myqcloud.com/img/18/2020-0310-1652-50.jpg?imageMogr2/format/webp')"></a>
</div>

```

![请输入图片描述][11]

## 百度自动推送

#### 介绍

原来是有个js版本的访客访问百度自动推送，现在百度关闭了。于是我参考PHP版本的折腾了一个,先查询是百度否以收录文章没有收录就推送~

推送效果还是很NICE的,推多少就看你有多少人访问了!!!

![请输入图片描述][12]

![请输入图片描述][13]

#### 使用

使用前先修改 `comments.php` 140行 的API 接口为你自己的~！ 修改后在去主题设置开启自动推送，否则访问文章将卡死无法访问！！

申请地址  [https://ziyuan.baidu.com/linksubmit/index?site=][14]

![请输入图片描述][15]

![请输入图片描述][16]

## 友情链接页面

以前用的友情链接插件，后面感觉很麻烦！于是百度到了 "[无插件实现 typecho 独立友链页面][17]" 不需要插件，只需按以下格式就能使用！

1.使用前先在独立页面启用模板

![请输入图片描述][18]

2. 按以下格式添加到`<ul id="flinks"></ul>`即可，单数的时候会错位需要添加一个占位 ！

```HTML

<ul id="flinks">

<li>博客名称</li>
<li>博客地址</li>
<li>博客头像</li>
<li>博客简介</li>

<li>博客名称</li>
<li>博客地址</li>
<li>博客头像</li>
<li>博客简介</li>

<!-- 单数使用以下 占位 -->

<li>暂无</li> 
<li>#</li>
<li>https://secure.gravatar.com/avatar/b513908e94857882cebbcc74d18843d3?s=60&d=mm&r=G</li>
<li>待添加</li>

</ul>

```

3.快捷插入

在主题面板提供了一个快捷插入,点击即可使用

![请输入图片描述][19]

## 图片排版

![请输入图片描述][20]

```html
<div class="tp">
<div><img src="https://xiamu-1251327481.cos.ap-guangzhou.myqcloud.com/img/19/2020-0318-1517-29.jpg?imageMogr2/format/webp"></div>
<div><img src="https://xiamu-1251327481.cos.ap-guangzhou.myqcloud.com/img/19/2020-0318-1517-34.jpg?imageMogr2/format/webp"></div>
<div>你可以根据选则添加</div>
</div>

个人建议 4- 5 图 一嵌套

<div class="tp">
<div></div>
<div></div>
<div></div>
<div></div>
</div>
```

这是我的单图和多图的排版习惯，可以参考以下！

![请输入图片描述][21]

## PJAX百度统计

百度统计pjax失效解决,修改 `Pure\js\moment.min.js` `84`行代码

改成自己的百度统计,重新加载一次就正常了！

```js
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "https://hm.baidu.com/hm.js?8af9735d76b164d50dfc42e09a5c5633"; //替换为自己的百度统计地址
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
``` 

## 其他

本主题的一些`JS css`表情包文件，我都存放在github！然后使用cdn加速！

不放心的同学,可以 FORK [https://github.com/xiamuguizhi/oss][22] 到自己仓库保存！

## 下载地址

Github: [https://github.com/xiamuguizhi/typecho-for-Pure][23]
本站下载: [Pure.zip][24]

## 主题更新

2021.2.21 感谢 [臭蛋][25] 添加 ` mermaid `的支持（一个在 markdown 下画图标的库）

效果如下：

```mermaid
graph LR;
　　Portal-->|发布/更新配置|Apollo配置中心;
　　Apollo配置中心-->|实时推送|App;
　　App-->|实时查询|Apollo配置中心;
```


  [1]: https://imhanjie.com/
  [2]: https://github.com/imhanjie/gridea-theme-pure
  [3]: https://52ql.cn/
  [4]: https://xiamuyourenzhang.cn/
  [5]: https://vkceyugu.cdn.bspapp.com/VKCEYUGU-2fa930c8-feec-4942-ac88-ba3781377bb0/1cf56a83-30cb-4039-abc4-e8c942fdff5b.jpg
  [6]: https://vkceyugu.cdn.bspapp.com/VKCEYUGU-2fa930c8-feec-4942-ac88-ba3781377bb0/2008beaf-d3a6-4a78-b586-283753fde92f.jpg
  [7]: https://vkceyugu.cdn.bspapp.com/VKCEYUGU-2fa930c8-feec-4942-ac88-ba3781377bb0/eb380550-02c2-4170-87d1-26234f6a0abb.jpg
  [8]: https://vkceyugu.cdn.bspapp.com/VKCEYUGU-2fa930c8-feec-4942-ac88-ba3781377bb0/ac5fe3a9-19b3-461b-bb96-b0d6c9eddba7.jpg
  [9]: https://vkceyugu.cdn.bspapp.com/VKCEYUGU-2fa930c8-feec-4942-ac88-ba3781377bb0/452160dd-0454-4962-abaf-0af690887cef.png
  [10]: https://vkceyugu.cdn.bspapp.com/VKCEYUGU-2fa930c8-feec-4942-ac88-ba3781377bb0/060e3a3d-bc8e-4b98-b048-0aeb861761fb.png
  [11]: https://vkceyugu.cdn.bspapp.com/VKCEYUGU-2fa930c8-feec-4942-ac88-ba3781377bb0/b89cef7e-dc74-4be0-b7c1-5ae8b6d8d883.png
  [12]: https://vkceyugu.cdn.bspapp.com/VKCEYUGU-2fa930c8-feec-4942-ac88-ba3781377bb0/1ee6a648-5e5e-4477-a035-0880cbb9d59d.png
  [13]: https://vkceyugu.cdn.bspapp.com/VKCEYUGU-2fa930c8-feec-4942-ac88-ba3781377bb0/3f9afd2b-da2d-4034-915f-6c47040d8664.png
  [14]: https://ziyuan.baidu.com/linksubmit/index?site=
  [15]: https://vkceyugu.cdn.bspapp.com/VKCEYUGU-2fa930c8-feec-4942-ac88-ba3781377bb0/eb510341-f3ea-4bc0-9ed2-674e51f9a32b.png
  [16]: https://vkceyugu.cdn.bspapp.com/VKCEYUGU-2fa930c8-feec-4942-ac88-ba3781377bb0/cb17283e-588f-4dc0-a481-70b218181c04.png
  [17]: https://www.onesrc.cn/p/no-plugin-implementation-of-typecho-independent-friend-chain-page.html/comment-page-1
  [18]: https://vkceyugu.cdn.bspapp.com/VKCEYUGU-2fa930c8-feec-4942-ac88-ba3781377bb0/fcb58a31-20c2-42d2-a93f-37d5d0185ac1.png
  [19]: https://vkceyugu.cdn.bspapp.com/VKCEYUGU-2fa930c8-feec-4942-ac88-ba3781377bb0/f114dcf5-9297-49e9-b99d-ebd2e00caba5.png
  [20]: https://vkceyugu.cdn.bspapp.com/VKCEYUGU-2fa930c8-feec-4942-ac88-ba3781377bb0/cc75fb2a-fac2-44c2-90fe-e11369b58301.png
  [21]: https://vkceyugu.cdn.bspapp.com/VKCEYUGU-2fa930c8-feec-4942-ac88-ba3781377bb0/46c28257-8403-4ab8-9d1f-29f64ed85ab6.png
  [22]: https://github.com/xiamuguizhi/oss
  [23]: https://github.com/xiamuguizhi/typecho-for-Pure
  [24]: https://xiamuyourenzhang.cn/usr/uploads/2021/02/2225728573.zip
  [25]: https://blog.cdbb.me/
  [26]: https://vkceyugu.cdn.bspapp.com/VKCEYUGU-2fa930c8-feec-4942-ac88-ba3781377bb0/6050ca9b-6830-4b19-a102-884b59663b39.png
