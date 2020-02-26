<?php

        if(isset($_POST['submit'])){ //true

            //Get all data from user
            $First_Name = $_POST['First_Name'];
            $Last_Name = $_POST['Last_Name'];
            $Middle_Name = $_POST['Middle_Name'];
            $Address = $_POST['Address'];
            $Birth_day = $_POST['Birth_day'];
            $Birth_Month = $_POST['$Birth_Month'];
            $Birth_Year = $_POST['$Birth_Year'];
            $Place_of_Birth = $_POST['Place_of_Birth'];
            $Gender = $_POST['Gender'];
            $Contact_Number = $_POST['Contact_Number'];
            $Contact_Number = $_POST['Contact_Number'];
            $Civil_Status = $_POST['Civil_Status'];
            $Year_Level = $_POST['Year_Level'];
            $Course = $_POST['Course'];
            $School_Year = $_POST['School_Year'];

            if($First_Name == NULL && $First_Name == ""){
                echo "First Name is Blank!!! Please Provide.";
            }
            if($First_Name.is_numeric()){
                echo "MUST BE LETTERS!!!!";

            }
            if($Last_Name == NULL && $Last_Name == ""){
                echo "Last Name is Blank!!! Please Provide.";
            }
            if($Middle_Name == NULL && $Middle_Name == ""){
                echo "Middle Name is Blank!!! Please Provide.";
            }
            if($First_Name == NULL && $First_Name == ""){
                echo "First Name is Blank!!! Please Provide.";
            }
            if($Address == NULL && $Address == ""){
                echo "Address Name is Blank!!! Please Provide.";
            }
            if($Birth_day== NULL && $Birth_day == ""){
                echo "Birth day is Blank!!! Please Provide.";
            }
            if($Birth_Month== NULL && $== "$Birth_Month"){
                echo "Birth Month is Blank!!! Please Provide.";
            }
            if($Birth_Year== NULL && $Birth_Year == ""){
                echo "Birth Year is Blank!!! Please Provide.";
            }
            if($Place_of_Birth== NULL && $Place_of_Birth == ""){
                echo "Place of Birth is Blank!!! Please Provide.";
            }
            if($Gender== NULL && $Gender == ""){
                echo "Gender is Blank!!! Please Provide.";
            }
            if($Contact_Number== NULL && $Contact_Number == ""){
                echo "Contact Number is Blank!!! Please Provide.";
            }
            if($Civil_Status== NULL && $Civil_Status == ""){
                echo "Civil Status is Blank!!! Please Provide.";
            }
            if($Year_Level== NULL && $Year_Level == ""){
                echo "Year Level is Blank!!! Please Provide.";
            }
            if($Course== NULL && $Course == ""){
                echo "Course is Blank!!! Please Provide.";
            }
            if($School_Year== NULL && $School_Year == ""){
                echo "School_Year is Blank!!! Please Provide.";
            }
            
            //IF Variables are SUCCESS
        else{
            echo "SUCCESSFULLY REGISTERED!!!";
        }
    }
?>
























        }