<?php 
/**
* 友情链接 by onesrc.cn
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('layout/_partial/head.php');
?>
<body class="mdui-drawer-body-left">
    <!-- Style from theme Pinghsu-->
<style>
    .post-lists {
    position: relative;
    display: block;
    overflow: hidden;
}

.post-lists-body {
    display: block;
}
    .post-list-item {
    float: left;
    width: 33.3333%;
    height: auto;
    padding: 15px;
    align-items: center;
}

.post-list-item-container {
    position: relative;
    overflow: hidden;
    width: 100%;
    padding: 0;
    border-radius: 3px;
    background-color: #fff;
    -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, .04);
    box-shadow: 0 1px 4px rgba(0, 0, 0, .04);
}

.post-list-item-container:hover {
    -webkit-box-shadow: 2px 2px 4px rgba(0, 0, 0, .1);
    box-shadow: 2px 2px 4px rgba(0, 0, 0, .1);
}

.post-list-item-container .item-thumb {
    position: relative;
    display: inherit;
    min-height: 250px;
    -webkit-transition: -webkit-transform 500ms ease, filter 500ms ease;
    -moz-transition: -moz-transform 500ms ease, filter 500ms ease;
    transition: transform 500ms ease, filter 500ms ease;
    background-position: 50% 50%;
    background-size: cover;
}

.post-list-item-container .item-desc {
    position: absolute;
    top: 0;
    overflow: hidden;
    width: 100%;
    height: 100%;
    padding: 40px 28px;
}

.post-list-item-container .item-desc p {
    font-size: 14px;
    margin: 0;
    padding: 0;
    word-break: break-all;
    opacity: 0;
    color: #fff;
}

.post-list-item-container:hover .item-thumb {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    transform: scale(1.1);
    -webkit-filter: blur(3px);
    -moz-filter: blur(3px);
    filter: blur(3px);
}

.post-list-item-container:hover .item-desc {
    background-color: rgba(0, 0, 0, .5);
}

.post-list-item-container:hover .item-desc p {
    -webkit-animation: fade-in .5s;
    animation: fade-in;
    animation-duration: .5s;
    opacity: 1;
}

.post-list-item-container .item-slant {
    position: absolute;
    z-index: 0;
    right: 0;
    bottom: 50px;
    left: 0;
    width: 110%;
    min-height: 100px;
    -webkit-transform: rotate(7deg) translate(-10px, 0);
    -ms-transform: rotate(7deg) translate(-10px, 0);
    transform: rotate(7deg) translate(-10px, 0);
    background-color: #fff;
}

.post-list-item-container .item-slant.reverse-slant {
    -webkit-transform: rotate(-10deg) translate(10px, -10px);
    -ms-transform: rotate(-10deg) translate(10px, -10px);
    transform: rotate(-10deg) translate(10px, -10px);
    opacity: .7;
    background-color: #f68e5f;
    -webkit-box-shadow: none;
    box-shadow: none;
}

.post-list-item-container .item-label {
    position: relative;
    height: 130px;
    padding: 25px 20px 40px;
    background-color: #fff;
}

.post-list-item-container .item-label .item-title a {
    font-size: 17px;
    line-height: 17px;
    word-break: break-all;
    color: #313131;
}

.post-list-item-container .item-label .item-meta {
    position: absolute;
    right: 0;
    bottom: 0;
    width: 100%;
    padding: 0 15px 15px;
    text-align: right;
}

.post-list-item-container .item-label .item-meta .item-meta-cat a {
    font-size: 13px;
    position: relative;
    float: right;
    margin-right: 10px;
    padding: 10px 0;
    text-align: right;
    text-transform: none;
    color: #5f5f5f;
}

.post-list-item-container .item-label .item-meta .item-meta-date {
    font-size: 12px;
    position: relative;
    float: left;们生活在大地上，但我们的梦想超越天
    padding-top: 9px;
    padding-left: 9px;
    text-align: right;
    text-transform: none;
    color: #f1f1f1;
}

.post-list-item-container .item-label .item-meta .item-meta-ico {
    display: inline-block;
    float: right;
    width: 42px;
    height: 42px;
    border: 1px solid #eaeaea;
    border-radius: 50%;
}
    .bg-white {
    background-color: #fff !important;
}

.bg-grey {
    background-color: #f7f7f7 !important;
}

.bg-deepgrey {
    background-color: rgba(0, 0, 0, .5) !important;
}

.bg-blue {
    background-color: #6fa3ef !important;
}

.bg-purple {
    background-color: #bc99c4 !important;
}

.bg-green {
    background-color: #46c47c !important;
}

.bg-yellow {
    background-color: #f9bb3c !important;
}

.bg-red {
    background-color: #e8583d !important;
}

.bg-orange {
    background-color: #f68e5f !important;
}
.post-list-item-container:hover {
    -webkit-box-shadow: 2px 2px 4px rgba(0, 0, 0, .1);
    box-shadow: 2px 2px 4px rgba(0, 0, 0, .1);
}
</style>
<?php $this->need('layout/_partial/background.php'); ?>
<div id="nexmoe-header">
    <?php $this->need('layout/_partial/header.php'); ?>
</div>
<div id="nexmoe-content">
    <div class="nexmoe-primary">

        <div class="nexmoe-post">
            <div class="nexmoe-post-cover mdui-ripple">
                <?php if ($this->fields->Cover) { ?>
                    <img src="<?php echo $this->fields->Cover ?>">
                <?php } else { ?>
                    <img src="<?php echo $this->options->background ?>">
                <?php } ?>
                <h1><?php $this->title() ?></h1>
            </div>
            <div class="nexmoe-post-meta">
                <a><i class="nexmoefont icon-calendar-fill"></i><?php $this->date('Y年n月d日'); ?></a>
                <a><?php $this->commentsNum('%d'); ?> 评论</a>
            </div>
            <article>
                <?php $this->content(''); ?>
            </article>
            <div id="comments">
                <?php $this->need('comments.php'); ?>
            </div>
        </div>


    </div>
    <script>
(function(){
    let a =document.getElementById("flinks");
    if(a){
        let ns = a.querySelectorAll("li");
        let nsl = ns.length;
        let str ='<div class="post-lists"><div class="post-lists-body" id ="flinksH">';
        let bgid = 0;
        const bgs =["bg-white","bg-grey","bg-deepgrey","bg-blue","bg-purple","bg-green","bg-yellow","bg-red","bg-orange"];
        for(let i = 0;i<=nsl-4;i+=4){
           bgid = Math.floor(Math.random() * 9);
            str += (`<div class="post-list-item"><div class="post-list-item-container "><div class="item-label ${bgs[bgid]}"><div class="item-title"><a href="${ns[i+1].innerText}">${ns[i].innerText}</a></div><div class="item-meta clearfix"><div class="item-meta-ico bg-ico-book"style="background: url(${ns[i+2].innerText}) no-repeat;background-size: 40px auto;"></div><div class="item-meta-date">${ns[i+3].innerText}</div></div></div></div></div>`);
        }
        str+='</div></div><style>.post-list-item{width: 50%;min-width: 300px;}</style>';
        let n1 = document.createElement("div");
        n1.innerHTML = str;
        a.parentNode.insertBefore(n1,a);
        a.style="display: none;";
    }else{
        console.log('No such id "flinksH"');
    }
}())
 </script>
</div>
<?php $this->need('layout/_partial/after-footer.php'); ?>
</body>

</html>
