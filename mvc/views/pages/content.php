<h1 class ="title">DANH SÁCH SINH VIÊN </h1>
<div class="content" align="center">
<table border="1" class="table">
    <tr>
        <th>
            name
        </th>
        <th>
            MSSV
        </th>
    </tr>
    
    <?php
        while($row = mysqli_fetch_array($data["SV"])){
            echo "<tr> 
            <td> ".$row['name']."</td>
            <td>".$row['mssv']."</td>
            </tr>";
        }
        ?>
    
</table>
</div>