<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4C OOP</title>
</head>

<body>
    <h1>
        <?php
        class fourey
        {

            public $studentname = "n/a";
            /**
             * Summary of studentid
             * @var string
             */
            public $studentid = "n/a";
            /**
             * Summary of studentemail
             * @var string
             */
            public $studentemail = "n/a";

            /**
             * Summary of __construct
             * @param mixed $name
             * @param mixed $id
             * @param mixed $email
             */
            function __construct($name, $id, $email)
            {
                $this->studentname = $name;
                $this->studentid = $id;
                $this->studentemail = $email;
            }

            /**
             * Summary of get_me
             * @param mixed $agh
             * @return mixed|string
             */
            function get_me($agh)
            {
                switch ($agh) {
                    case "name":
                        return $this->studentname;
                        break;
                    case "id":
                        return $this->studentid;
                        break;
                    case "email":
                        return $this->studentemail;
                        break;
                    default:
                        echo "balbal <br>";
                }
            }
        }


        $jl = new fourey(
            "Jade Ross D. Banag",
            "2019-100136",
            "jadeross.banag.d@bulsu.edu.ph"
        );

        echo $jl->get_me("name"), "<br>",
        " ", $jl->get_me("id"), "<br>",
        " ", $jl->get_me("email"), "<br>", "<br>";

        $jl2 = new fourey(
            "Ray-mart D. Constantino",
            "2019-112134",
            "ray-mart.constantino@bulsu.edu.ph"
        );

        echo $jl2->get_me("name"), "<br>",
        " ", $jl2->get_me("id"), "<br>",
        " ", $jl2->get_me("email"), "<br>";

        class rectangle
        {
            public $length;
            public $width;

            function __construct($len, $wid)
            {
                $this->length = $len;
                $this->width = $wid;
            }

            function perimeter()
            {
                return ($this->length) * 2 + ($this->width) +  ($this->width) * 2;
            }

            function area()
            {
                return ($this->length) * ($this->width);
            }
        }

        class cuboid extends rectangle
        {
            public $length;
            public $width;
            public $height;


            function __construct($len, $wid, $heit)
            {
                $this->length = $len;
                $this->width = $wid;
                $this->height = $heit;
            }


            function volume()
            {
                return ($this->length) * ($this->width) * ($this->height);
            }

            function perimeter()
            {
                return ($this->length) + ($this->width) +  ($this->width) * 4;
            }


            function surface_area()
            {
                return 2 * (($this->length) * ($this->width)) +
                    2 * (($this->length) * ($this->height)) +
                    2 * (($this->height) * ($this->width));
            }
        }

        $mahaba = new rectangle(2, 5);
        $punggok = new rectangle(4, 6);
        $bulky = new cuboid(5, 8, 10);
        echo "<br>";
        echo "perimeter is: ", $mahaba->perimeter(), "<br>";
        echo "area is: ", $mahaba->area(), "<br>";
        echo "<br>";
        echo "perimeter is: ", $punggok->perimeter(), "<br>";
        echo "area is: ", $punggok->area(), "<br>";
        echo "<br>";
        echo "perimeter is: ", $bulky->perimeter(), "<br>";
        echo "area is: ", $bulky->area(), "<br>";
        echo "volume is: ", $bulky->volume(), "<br>";
        echo "surface area is: ", $bulky->surface_area(), "<br>";

        ?>
    </h1>
</body>

</html>