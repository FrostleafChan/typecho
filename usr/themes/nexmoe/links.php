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
