<?php
/**
 * Created by PhpStorm.
 * User: nolan
 * Date: 3/14/2019
 * Time: 12:11 AM
 */

require("File.php");
require("RecordFactory.php");
require("Record.php");
class CreateTable
{
    public static function createHTMLTable($rows, $titles): String
    {
        $html = "
            <table class='table table-striped'>
              <thead class='thead-dark'>
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
        foreach($rows as $row)
        {
            $obj = ($row -> gerRecord());
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