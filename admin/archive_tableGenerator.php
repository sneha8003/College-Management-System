<?php

// creating table with the help of table generator
class TableGenerator{
	//global heading is declared
	public $headings;
	public $rows= [];
//setHeading funtion is declared
	public function setHeadings($heading){
		$this->headings = $heading;
	}
//function  is declared to add row
	public function addRow($row){
		$this->rows[] = $row;
	}
//getHTML function is declared
	public function getHTML(){
		$html ='<table style="overflow-x:auto;">';
		$html .='<tr>';
		// for all heading of table
		foreach($this->headings as $heading){
			$html .='<th>'.$heading.'</th> ';
		}
		// for all table row of table
		$html .= '</tr>';
				foreach($this->rows as $row){
			$html  .= '<tr>';
			
		

			foreach($row as $key => $cell){
				if(!is_numeric($key))
					$html .= '<td>'.$cell.'</td>';
				
			}
			//when Update button is pressed to redirect the update
			$html .='<td> <a href="update_user.php?id='.$row['id'].'">Update</a>';
			//when delete button is pressed to redirect the delete
			$html .='<td> <a href="delete_user.php?delete='.$row['id'].'">Delete</a></td>';
			//tr is closed
			$html .='</tr>'; 

		}
		$html .='</table>';
		return $html;
	} 
}
?>
<style>
	table{
		/*border is set here*/
		border: 1px solid black;
		width: 100%;
		height: 10%;
		

	}
	table th{
		/*background color is used*/
		background-color: lightblue;
	}
	table tr{
	
		/*padding is set 2px*/
		padding: 2px;
		
		
	}
	table td{
		overflow: auto;

	}
	tr:nth-child(even){background-color: #f2f2f2} /*background color is set*/
	   /*https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_table_responsive
</style>

