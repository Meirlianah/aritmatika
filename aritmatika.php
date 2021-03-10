<?php
function print_deret_aritmatika($total)
{
	$pertama=3;
	$kedua=4;

	//menyimpan string 
	$hasil1 = "$pertama $kedua";

	for ($i=0; $i<$total-2; $i++)
	{
		$keluaran = $pertama + $kedua;

		$hasil1 = $hasil1." $keluaran";


		$pertama = $kedua;
		$kedua = $keluaran;
	}
	return $keluaran;
}

function print_deret_fb1($jumlah)
{
	$angka1=3;
	$angka2=4;

	$hasil = "$angka1 $angka2";

		for ($i=0; $i<$jumlah-2; $i++)
		{
			$output = $angka1 + $angka2;

			$hasil = $hasil." $output";

			$angka1 = $angka2;
			$angka2 = $output;
		}
		return $hasil;
}

echo print_deret_fb1(4);
echo "<br>";
echo "<br>";
echo "Hasil Suku ke 10";
		echo "<br>";
echo print_deret_aritmatika(10);
echo "<br>";

?>