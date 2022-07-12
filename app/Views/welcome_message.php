<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center m-4">

		<form action="<?= base_url('/search'); ?>" method="post" class="mb-3">
		<div class="mt-3 row">
			<input type="text" class="form-control col" id="exampleFormControlInput1" placeholder="cari...." name="keyword">
            <div class="form-group col-2">
                <select id="inputState" class="form-control" name="selected">
                    <option name="nama" value="nama" selected>Nama</option>
                    <option name="buku" value="buku">Buku</option>
                </select>
            </div>
			<button class="btn btn-primary col-1 ml-2">Search</button>
		</div>
		</form>

        <?php $no = 1;
        echo '<table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Siswa</th>
            <th scope="col">Meminjam</th>
            <th scope="col">Kembali</th>
            <th scope="col">Buku</th>
            <th scope="col">Jumlah Halaman</th>
            <th scope="col">Penulis</th>
            <th scope="col">Tipe</th>
          </tr>
        </thead>
        <tbody>';
         if(isset($students)) {
    
                        foreach ($students as $student) { ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $student['name'] ?></td>
                                <td><?= $student['takenDate'] ?></td>
                                <td><?= $student['broughtDate'] ?></td>
                                <td><?= $student['book_name'] ?></td>
                                <td><?= $student['pageCount'] ?></td>
                                <td><?= $student['author_name'] ?></td>
                                <td><?= $student['type_name'] ?></td>
                                
                            </tr>
                        <?php $no++;
                        } 
                    }else if(isset($books)) {
    
                        foreach ($books as $book) { ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $book['name'] ?></td>
                                <td><?= $book['takenDate'] ?></td>
                                <td><?= $book['broughtDate'] ?></td>
                                <td><?= $book['book_name'] ?></td>
                                <td><?= $book['pageCount'] ?></td>
                                <td><?= $book['author_name'] ?></td>
                                <td><?= $book['type_name'] ?></td>
                                
                            </tr>
                        <?php $no++;
                        } 
                    }

                      echo '</tbody>
                      </table>';  
                        ?>

        </div>
    </div>

    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>