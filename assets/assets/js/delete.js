//berhasil
const flashData = $(".flash-data").data("flashdata");
// console.log(flashdata);
if (flashData) {
	Swal.fire("Berhasil!", "" + flashData, "success");
}

//tombol hapus
$(".tombol-hapus").on("click", function (e) {
	e.preventDefault();

	const href = $(this).attr("href");

	Swal.fire({
		title: "Are you sure?",
		text: "You won't be able to revert this!",
		type: "warning",
		showCancelButton: true,
		confirmButtonText: "Hapus Sekarang!",
		cancelButtonText: "Batal",
		reverseButtons: true,
		padding: "2em",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});
