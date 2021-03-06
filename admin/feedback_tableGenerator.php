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
		foreach($this->headings as $heading){
			$html .='<th>'.$heading.'</th> ';
		}
		
		$html .= '</tr>';
		// for all heading of table
		foreach($this->rows as $row){
			$html  .= '<tr>';

			foreach($row as $key => $cell){
				if(!is_numeric($key))
					$html .= '<td>'.$cell.'</td>';
			}
			//when delete button is pressed to redirect the delete
			$html .='<td> <a href="delete_feedback.php?delete='.$row['id'].'" name="delete">Delete</a></td>';

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
		
		width: 100%;
		

	}
	table tr{
	
		font-size: 15px;
		padding: 2px;
		
		
	}
	table td{
		
		overflow: auto;
		border:1px solid;

	}
	tr:nth-child(even){background-color: #f2f2f2}    /*https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_table_responsive
</style>

