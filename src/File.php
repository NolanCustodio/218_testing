<?php
require("Record.php");

class File
{
    public static function readCSVtoArray(String $filename):array
    {
        $titles = $records = array();
        $count = 0;

        if (($handle = fopen($filename, "r")) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {

                if($count == 0) {
                    $titles = $row;
                } else {
                    array_push($records, new Record($row, $titles));
                }
                $count++;
            }
            fclose($handle);
        }
        return array($records, $titles);
    }

    public static function createHTMLTable($records, $titles): String
    {
        $html = "
            <table class='table'>
              <thead>
                <tr>
                    <th>#</th>";
        foreach($titles as $title)
        {
            $html .= ("<th>" . ucwords($title) . "</th>");
        }

        $html .= "</tr>
                </thead>
              <tbody>";


        $count = 1;
        foreach($records as $record)
        {
            $html .= "<tr>";

            $obj = ($record->getData());
            $html .= ("<td>" . $count . "</td>");
            foreach($titles as $title){
                $html .= ("<td>" . $obj[$title] . "</td>");
            }

            $html .= "</tr>";
            $count++;
        }

        $html .= "
              </tbody>
            </table>";

        return $html;
    }


}