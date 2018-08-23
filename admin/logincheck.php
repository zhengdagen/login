<?php
if(@$_GET['state']=='exitlogin')
{
    $username=$_COOKIE['tokenls'];
    setcookie('tokenls',$username,time()-1,'/');
    exit("<script>
    location.href='../index.php';
    </script>");
    //echo 111;//
}
   
if(isset($_POST["submit"]))
{
     include_once "conn.php";
    $username=$_POST['username'];
    $password=$_POST['password'];
    @$autoLogin=$_POST['autoLogin'];
    $sql="SELECT * FROM `tb_students` WHERE username='$username'" ;
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)==1)
    {
        $row=mysqli_fetch_assoc($result);
        if($row['password']==$password)
        {
             if($autoLogin==1)
             {
                setcookie('username',$username,strtotime('+7 days'));
                $key='zheng';
                $token=md5($username.$password.$key);
                setcookie('token',$token,strtotime('+7 days'),'/');
            }
            else{
                $key='zheng';
                $tokenls=$username.':'.md5($password.$key);
                header("Set-Cookie: tokenls=$tokenls; path=/; ");//setcookie('username',$username);
            }
                
            exit("<script>
                location.href='../index.php';
                </script>");
                //echo 111;//
                
        }
        else
        {
            exit("<script>
                alert('Logon failed!');
                location.href='../login.html';
                </script>");
        }   
    }
    else
        {
            exit("<script>
                alert('Logon failed!');
                location.href='../login.html';
                </script>");
        }   

 mysqli_close($conn);
    }
   else
   {
       echo '错误';
   }
                 
   
?>

