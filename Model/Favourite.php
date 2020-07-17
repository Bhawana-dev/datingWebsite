<?php


class FavouriteBean{

    public $u_id;
    public $f_id;

    function set_u_id($u_id){
        $this->u_id = $u_id;
    }

    function get_u_id(){
        return $this->u_id;
    }

    function set_f_id($f_id){
        $this->f_id = $f_id;
    }

    function get_f_id(){
        return $this->f_id;
    }

    function addFav(){
        require "Configuration/Configuration.php";

        $conn = OpenCon();

        $sql = "INSERT INTO fav_list(u_id, fav_id) VALUES ('".$this->get_u_id()."','".$this->get_f_id()."')";
        $result = mysqli_query($conn,$sql);

            if ($result) {
                return  $result;
            } else {
                $error = "Your Login Email or Password is invalid";
            }
        CloseCon($conn);
    }
    function listAllFavs($u_id)
    {
        require "../Configuration/Configuration.php";

        $conn = OpenCon();

        $sql = "SELECT f_id,fav_id FROM fav_list WHERE u_id = '$u_id'";
        $result = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_array($result)) {
            $row_fav_id = $row[1];
            $sqlu = "SELECT u_id,name, gender, picture FROM users WHERE u_id = '" . $row[1] . "'";
            $resultu = mysqli_query($conn, $sqlu);
            $rowu = mysqli_fetch_array($resultu);
            ?>
            <article class="blog_item">
                <div class="blog_item_img">

                    <img class="card-img rounded-0" src="img/portfolio/<?php echo $rowu['picture']; ?>" alt="" style="width:70%; height:70vh;">
                    <a href="../router.php?action=delFav&&del_favid=<?php echo $rowu['u_id']; ?>" class="blog_item_date">
                        <!--<h3>15</h3>-->
                        <p>Unlike</p>
                    </a>
                </div>

                <div class="blog_details">
                    <a class="d-inline-block" href="work-details.php?id=<?php echo $rowu['u_id']; ?>">
                        <h2><?php echo $rowu['name']; ?></h2>
                    </a>
                    <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                        he earth it first without heaven in place seed it second morning saying.</p>
                    <ul class="blog-info-link">
                        <li><a href="#"><i class="fa fa-user"></i> Message</a></li>
                        <li><a href="../router.php?action=wink&&to_u_id=<?php echo $rowu['u_id']; ?>"><i class="fa fa-comments"></i> Wink</a></li>
                    </ul>
                </div>
            </article>
<?php
        }


    }
    function delFavId($login_id, $delFavId)
    {
        require "Configuration/Configuration.php";

        $conn = OpenCon();

        $sql = "delete from fav_list where u_id = '$login_id' && fav_id = '$delFavId'";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            header("Location:View/favlist.php?favDelRes=$result");
        } else {
            $error = "Your Login Email or Password is invalid";
        }
        CloseCon($conn);

    }

}


?>