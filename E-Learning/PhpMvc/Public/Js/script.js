$(function() {

    $('.tombolDataMahasiswa').on('click' , function(){

        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click' , function(){

        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/E-Learning/PhpMvc/Public/Mahasiswa/ubah')

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/E-Learning/PhpMvc/Public/Mahasiswa/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#jurusan').val(data.jurusan);
                $('#email').val(data.email);
            }
        });

    });


});