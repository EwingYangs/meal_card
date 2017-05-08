<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>“饭卡回家”系统主页</title>

    <link href="/Public/Home/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/Home/css/index.css"/>

    <!--[if lt IE 9]>
    <script src="./lib/html5shiv/html5shiv.min.js"></script>
    <script src="./lib/respond.js/respond.js"></script>
    <![endif]-->
</head>
<body>
    <div class="main">
        <div class="left">
         <div class="left_top">
            <div class="personal">
                
                <button class="btn btn-primary" type="button" id="user-center">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    个人中心
                    <span class="badge"><?=$number?></span>
                </button>
            </div>
            <div class="findcard">
                <button type="button" class="btn btn-success" data-target="#myModal" data-toggle="modal">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    一键找饭卡
                </button>
            </div>
            <div class="finduser">
                <input type="text" placeholder="请输入学号" name="" id="find_sno">
                <button type="button" class="btn btn-info" id="findOne">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    一键找失主
                </button>
            </div>
          </div>
            <div class="left_bottom">
              <span class="label label-warning">广金快讯</span>
              <?php foreach($news as $k=>$v){?>
              <div class="news">
                
                  <p><?=$v['content']?></p>
                
              </div>
              <?php }?>
            </div>
         </div>

        <div class="right">

            <div class="right_top">
            <form action="" class="publish clearfix" id="FabuForm">
                <p class="clearfix"><?php echo $sno? '<a type="button" class="btn btn-primary pull-right" style="margin-left:10px">当前学号：'.$sno.'</a>' : ''?> <a type="button" class="btn btn-primary pull-right" href="<?php echo U('user/logout')?>" >退出</a></p>
                <p>您好,请问有什么丢失物品需要寻找?</p>
                <textarea name="message" id="message" class="content"></textarea>
                <input name="img" id="img" type="file" value="上传图片" style="visibility:hidden;position:absolute;top:0px;width:0px">
                <input type="button" value="上传图片" id="btn" class="pull-left" />
                <input type="hidden" name="sno" value="<?=$sno?>">
                <input type="hidden" name="type" value="1">
                <submit type="button" class="btn btn-danger pull-right" data-target="#myModal2" data-toggle="modal">发布</submit>
            </form>
            </div>

            <div class="list" id="publish">
                <span class="label label-warning" id="search">正在漂流</span>
                <form action="/" method="post">
               <input type="submit" class="btn btn-success pull-right" style="margin-right:10px" value="搜索">
               <input type="text" class="pull-right" style="width:80px;margin-right:10px;margin-top:3px" name="content">
               <form>
                <?php foreach($info['data']as $k=>$v){?>
                
                <div class="passage">
                    <div class="media">
                        <div class="media-left">
                            <?php if($v['img_url']){ showImage($v['img_url'],'153','138'); ?>
                            <?php }else{?>
                                <img class="media-object" src="/Public/Home/images/5.jpg"  width="150px" height="150px">
                            <?php }?>
                        </div>
                        <div class="media-body">
                            <h2 class="media-heading"><?php if($v['type'] == '0'){echo '饭卡寻找';}else{echo '寻找我的宝贝';}?></h2>
                            <p><?=$v['message']?></p>

                            <div class="contact">
                                <span style="font-size:5px;color:gray;">发布时间：<?=$v['create_at']?></span>&nbsp;&nbsp;&nbsp;
                                <input onclick="$('#contact').attr('sid',<?=$v['id']?>);$('#contact').attr('sno','<?=$v['sno']?>');" type="button" value="联系Ta" class="contact-btn" data-target="#myModal3" data-toggle="modal"/>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div style="margin-top:10px" class="pull-right"><?=$info['page']?><div>
        </div>
    </div>
<!-- 提示模态框 -->
    <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" style="margin-top:100px">
        <div class="modal-dialog">

            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                    </button>
                    <h4 class="modal-title">你确定要发布你寻找饭卡的个人信息吗？</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
                    <button type="button" typeid="" class="btn btn-primary" id="findCart">确定</button>
                </div>
            </div>
        </div>
    </div>

     <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true" style="margin-top:100px">
        <div class="modal-dialog">

            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                    </button>
                    <h4 class="modal-title">你确定要发布你寻找物品的信息吗？</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
                    <button type="button" typeid="" class="btn btn-primary" id="fabu">确定</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal inmodal" id="myModal3" tabindex="-1" role="dialog" aria-hidden="true" style="margin-top:100px">
        <div class="modal-dialog">

            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                    </button>
                    <h4 class="modal-title">你确定要联系Ta？</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
                    <button type="button" sno="" sid="" class="btn btn-primary" id="contact">确定</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/Public/Home/js/jquery/jquery.min.js"></script>
<script src="/Public/Home/js/layui/layer.js"></script>
<script src="/Public/Home/js/bootstrap/js/bootstrap.min.js"></script>
<script src="/Public/Home/js/index.js"></script>
<script>
    $('#findCart').click(function(){
        var url = '<?php echo U('index/ajaxPublish')?>';
        $.ajax({
            type : 'get',
            url : url,
            dataType : 'json',
            success : function(data){
                console.log(data);
                if(data.msg == 'success'){
                    $('#myModal').modal('hide');
                   
                    showInfo('发布成功');
                    window.location.reload();
                }
            }
        });
    });
                
    
    $('#fabu').click(function(){
        if($('#message').val() == ''){
            showInfo('发布的信息不能为空');
            return false;
        }
        var fabu_url = "<?php echo U('index/ajaxFabu')?>";
        $.ajax({
            type : 'post',
            processData: false,
            contentType: false,
            url : fabu_url,
            data : new FormData($('#FabuForm')[0]),
            success : function(data){
                if(data =='success'){
                    //关闭模态框
                    $('#myModal2').modal('hide');
                    showInfo('发布成功');
                    //刷新页面
                    window.location.reload();
                }else{
                    $('#myModal2').modal('hide');
                    showInfo('发布失败');
                }
            },

        });
    }); 

     $('#contact').click(function(){
        var sno = $('#contact').attr('sno');
        var sid = $('#contact').attr('sid');
        var url = '<?php echo U('index/ajaxContact')?>';
        $.ajax({
            type : 'post',
            url : url,
            data : {sno : sno,id : sid},
            success : function(data){
                if(data == 'success'){
                    $('#myModal3').modal('hide');
                    showInfo('联系Ta成功');
                    window.location.reload();
                }else{
                    $('#myModal3').modal('hide');
                    showInfo('联系Ta失败');
                }
            }
        });
    });

    $('#findOne').click(function(){
        var content = $('#find_sno').val();
        var url = '<?php echo U('index/ajaxFind')?>';
        if(content == ''){
            showInfo('请输入学号');
        }else{
            $.ajax({
                type : 'post',
                data : {sno : content},
                url  : url,
                success : function(data){
                    if(data == 'success'){
                        showInfo('你的联系方式已经发送给失主了');
                        $('#find_sno').val('');
                    }else{
                        showInfo(data);
                    }
                }
            });
        }
    });

    $('#user-center').click(function(){
        var url = '<?php echo U('index/userCenter')?>';
        location.href = url;
    });
</script>
</html>