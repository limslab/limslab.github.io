<html>
<head>
    <meta charset="UTF-8">
    <title>脚本世界浏览访问统计-www.jbsage.com</title>
</head>
<body>
    <?php
        //数字显示网页计数器
        $max_len = 9;
        $CounterFile = "counter.dat";
       //如果访问统计文件不存在
        if(!file_exists($CounterFile)){
            $counter = 9999999;
            $cf = fopen($CounterFile,"w");  //已可写入方式打开文件
            fputs($cf,'0');                 //初始化计数器,初始值9999999
            fclose($cf);                    //写入完毕,关闭文件
        }
        //访问统计文件存在
        else{                               //取回当前计数器的值
            $cf = fopen($CounterFile,"r");
            $counter = trim(fgets($cf,$max_len));
            fclose($cf);
        }
        $counter++;                         //总访问人数加1
        $cf = fopen($CounterFile,"w");
        fputs($cf,$counter);                //把新的访问总人数写入文件
        fclose($cf);
    ?>
<div id="index" align="center">
    <span>欢迎您!</span>
        <span>您是<font style="size:15px;color:red;">脚本世界</font>网站的第
            <?php
            echo $counter;                  //显示总访问人数
            ?>
            位访客！
        </span>
    <br/>
    <span>如果觉得脚本世界有用,请多多支持,如果喜欢脚本世界,请多多支持!</span>
</div>

</body>
</html>
