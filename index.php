<!DOCTYPE html>
<html>
  <head>
    <style>
      a {
        text-decoration:none;
      }
      h1 {
        font-size:45px;
        text-align:center;
      }
      h2 {
        text-align:center;
      }

      div#side_left{
        width:20%;
        height:100%;
        float:left;
        margin:5px;
        margin-top: 60px;
        }
        #side_left_box{
        width:95%;
        height:45%;
        float:left;
        margin:5px;
        }
        #mid_content{
        width:55%;
        height:250px%;
        float:left;
        margin:5px;
        margin-top: 60px;
        }
        #mid_content_box{
          width: 100%;
          height: 30%;
          float: left;
          margin: 5px;
        }
        #side_rigth{
        width:20%;
        height:100%;
        float:right;
        margin:5px;
        }
        #side_rigth_box{
        width:95%;
        height:45%;
        margin:5px;
        margin-top:5%;
        }
    </style>
    <meta charset='utf-8'>
    <title> WEB-<?php echo $_GET['id'];?> </title>
  </head>
  <body>
    <div id="side_left">
      <h1><a href="index.php?id=WEB">WEB</h1>

        <ol>
          <li><a href="index.php?id=HTML">HTML</a></li>
          <li><a href="index.php?id=CSS">CSS</a></li>
          <li><a href="index.php?id=JavaScript">JavaScript</a></li>
          <li><a href="index.php?id=PHP">PHP</a></li>
        </ol>
      <div id="side_left_box">
        <input type="button" value="Night" onclick="
        document.querySelector('body').style.backgroundColor='black';
        document.querySelector('body','h2','li').style.color='white';
        ">
        <input type="button" value="Day" onclick="
        document.querySelector('body').style.backgroundColor='white';
        document.querySelector('body','h2','li').style.color='black';
        ">
      </div>
    </div>
    <div id="mid_content">
      <h2>
        <?php
          echo $_GET['id'];
         ?>
      </h2>
      <div id="mid_content_box">
        <img src= "<?php echo $_GET['id'];?>.jpg" width="100%">
      </div>
      <div id="mid_content_box">
        <?php
          echo file_get_contents('data/'.$_GET['id']);
         ?>
       </div>

             <div id="disqus_thread"></div>
             <script>

             /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
             /*
             var disqus_config = function () {
             this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
             this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
             };
             */
             (function() { // DON'T EDIT BELOW THIS LINE
             var d = document, s = d.createElement('script');
             s.src = 'https://web-ut2g7t94q0.disqus.com/embed.js';
             s.setAttribute('data-timestamp', +new Date());
             (d.head || d.body).appendChild(s);
             })();
             </script>
             <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

             <!--Start of Tawk.to Script-->
             <script type="text/javascript">
             var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
             (function(){
             var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
             s1.async=true;
             s1.src='https://embed.tawk.to/5e85796a69e9320caabf7380/default';
             s1.charset='UTF-8';
             s1.setAttribute('crossorigin','*');
             s0.parentNode.insertBefore(s1,s0);
             })();
             </script>
             <!--End of Tawk.to Script-->

  </body>
</html>
