<?php
echo("<style>
html{
  cursor: pointer;
  color: white;
  overflow: hidden;
  width: 100vw;
  height: 100vh;
  display: inline-block;
}
body{
  width: 100%;
  height: 100%;
  display: inline-block;
  background: #466368;
  background: -webkit-linear-gradient(#648880, #293f50);
  background:    -moz-linear-gradient(#648880, #293f50);
  background:         linear-gradient(#648880, #293f50);
  overflow-y: scroll;
  overflow-x: hidden;
  margin: 0 auto;
  padding: 0%;
}
a{
  Color:White;
  Text-Decoration:None;
}
</style>");
echo("<html>");
echo("<head><link rel='shortcut icon' href='[one]'/><title>Artifice Online :: Bloggr</title></head>");
echo("<body>");
echo("<h2 style='Float:Left;Clear:Both;Margin:2%;Display:Inline-Block;Margin-Bottom:0%;'>Artifice News Feed</h2>");
echo("<hr/>");
function news($_news){
  $_news = (json_decode(file_get_contents($_news),true));
  $_news = ($_news["articles"]);
  $_hash = array();
  $_pack = array();
  foreach($_news as $_i => $_g){
    ($_hash[$_i] = ("<code><a href='".urldecode($_news[$_i]["url"])."?hash=".md5(base64_encode(rand(1000,9000)))."'>".preg_replace("/[^a-z0-9]/i"," ",urldecode($_news[$_i]["title"]))."</a></code>"));
  }//
  return($_hash);
}
$_desmond = array();
$_diamond = array();
$_vagabond = array();
$_diamond[1] = (news("https://newsapi.org/v1/articles?source=google-news&sortBy=top&apiKey=83cb5a95a9b84c228cc754a53f2a72ee"));
$_diamond[2] = (news("https://newsapi.org/v1/articles?source=cnn&sortBy=top&apiKey=83cb5a95a9b84c228cc754a53f2a72ee"));
$_diamond[3] = (news("https://newsapi.org/v1/articles?source=the-guardian-uk&sortBy=top&apiKey=83cb5a95a9b84c228cc754a53f2a72ee"));
$_diamond[4] = (news("https://newsapi.org/v1/articles?source=the-guardian-au&sortBy=top&apiKey=83cb5a95a9b84c228cc754a53f2a72ee"));
foreach($_diamond as $_i => $_g){
  foreach($_g as $_d => $_c){
    $_vagabond[] = ($_g[$_d]);
  }
}
echo(implode("<hr/>",$_vagabond));
echo("<hr/>");
echo("<code style='Float:Right;Clear:Both;Margin:2%;Margin-Top:0%;Display:Inline-Block;'>Developed by Night Core Co Ltd & Art Mydeas Co Ltd.</code>");
echo("</body>");
echo("</html>");
?>
