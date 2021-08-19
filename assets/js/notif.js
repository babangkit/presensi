const flashData = $('.flash-data').data('flashdata');

//Notify
$.notify({
    icon: 'flaticon-alarm-1',
    title: 'Haloo ' + flashData,
    message: 'Selamat datang di website Sistem Informasi Forum Asisten',
}, {
        type: 'info',
        placement: {
            from: "top",
            align: "right"
        },
        time: 1000,
    });