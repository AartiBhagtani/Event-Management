<?php
	//setting time zone
	date_default_timezone_set('Asia/kolkata');
	
	//get previous and next month
	if(isset($_GET['ym']))
	{
		$ym = $_GET['ym'];
	}
	else
	{
		//This month
		$ym = date('Y-m');
	}
	//check format 
	$timestamp = strtotime($ym,"-01");
	if($timestamp===false)
	{
		$timestamp = time();
	}
	//today
	$today = date('Y-m-d',time());
	// for h3 title
	$html_title = date('Y / n',$timestamp );
	//create pre and next month link mktime(hour,min,sec,month,day,year)
	$prev = date('Y-m',mktime(0,0,0,date('m',$timestamp)-1, 1, date('Y',$timestamp)));
	$next = date('Y-m',mktime(0,0,0,date('m',$timestamp)+1, 1, date('Y',$timestamp)));
	
	//no of days in a month
	$day_count = date('t',$timestamp);
	
	//0 sun 1 mon 2 tues
}
	
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title="calender"></title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans"
     rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css
    /bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/
    K68vbdEjh4u" crossorigin="anonymous">

    <style>

      .container
      {
        font-family: 'Noto Sans', sans-serif;
        margin-top: 40px;
      }
      .today
      {
        background: orange;
      }
      td
      {
        height: 40px;
        padding:0  25px  15px 5px;
      }
      th
      {
        height: 50px;
        text-align: center;
        background: pink;
      }
      th:nth-of-type(7),td:nth-of-type(7)
      {
        color: blue;
      }
      th:nth-of-type(1),td:nth-of-type(1)
      {
        color: red;
      }
      a
      {
        color: green;
      }
      table
      {
        border-collapse:collapse;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h3><a><</a> 2016 / 06 <a>></a></h3>
      <br>
      <table border class="table table-bordered">
        <tr>
          <th>S</th>
          <th>M</th>
          <th>T</th>
          <th>W</th>
          <th>T</th>
          <th>F</th>
          <th>S</th>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>1</td>
          <td>2</td>
          <td>3</td>
          <td>4</td>
        </tr>
        <tr>
          <td>5</td>
          <td>6</td>
          <td>7</td>
          <td>8</td>
          <td>9</td>
          <td>10</td>
          <td>11</td>
        </tr>
        <tr>
          <td>12</td>
          <td class="today">13</td>
          <td>14</td>
          <td>15</td>
          <td>16</td>
          <td>17</td>
          <td>18</td>
        </tr>
        <tr>
          <td>19</td>
          <td>20</td>
          <td>21</td>
          <td>22</td>
          <td>23</td>
          <td>24</td>
          <td>25</td>
        </tr>
        <tr>
          <td>26</td>
          <td>27</td>
          <td>28</td>
          <td>29</td>
          <td>30</td>
          <td></td>
          <td></td>
        </tr>


      </table>
    </div>
  </body>
</html>
