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
			//when delete button is pressed to redirect the delete
		$html .='<td> <a href="delete_module.php?delete='.$row['id'].'" name="delete">Delete</a></td>';
		//when update button is pressed to redirect the update
		$html .='<td> <a href="update_module.php?id='.$row['id'].'">Update</a>';
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
		/*width: 30%;*/
		overflow: auto;
		border:1px solid;

	}
	tr:nth-child(even){background-color: #f2f2f2}  /*background color is set*/
	    /*https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_table_responsive
</style>

