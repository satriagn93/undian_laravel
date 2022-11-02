function dp1() {
    document.getElementById('doorprizevalue').value = "1";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 1,
        success: function(data) {
            if (data.detail == null) {
                $('#p1value').html("1");
                $("#btn_start").show('');
                
                $("#gambar1").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');

                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
                $("#gambar16").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 1',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/be3a7b3c-e3e5-1927-33ce-dfd7f788cb1c.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}

function dp2() {
    document.getElementById('doorprizevalue').value = "2";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 2,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("2");
                
                $("#gambar2").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');

                $("#gambar1").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
                $("#gambar16").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 2',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/62ea28a0-9fa8-43a8-73e2-9dff32bf182b.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp3() {
    document.getElementById('doorprizevalue').value = "3";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 3,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("3");
                
                $("#gambar3").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
                $("#gambar16").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 3',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/0a71f2e5-8857-8c32-56bd-08ac723de548.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp4() {
    document.getElementById('doorprizevalue').value = "4";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 4,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("4");
                
                $("#gambar4").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
                $("#gambar16").hide('');
            }else{
                
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 4',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/813f67cc-f6ca-b360-54f9-c7b25b46f159.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp5() {
    document.getElementById('doorprizevalue').value = "5";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 5,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("5");
                
                $("#gambar5").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
                $("#gambar16").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 5',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/0630b26d-e6e3-f078-a5bc-9b2954bce3f1.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp6() {
    document.getElementById('doorprizevalue').value = "6";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 6,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("6");
                
                $("#gambar6").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
                $("#gambar16").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 6',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/fa52e9ae-db5f-f40a-ef21-226efa8c3771.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp7() {
    document.getElementById('doorprizevalue').value = "7";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 7,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("7");
                
                $("#gambar7").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
                $("#gambar16").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 7',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/068cea0a-1084-169f-e0f0-d06b9f350c85.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp8() {
    document.getElementById('doorprizevalue').value = "8";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 8,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("8");
                
                $("#gambar8").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
                $("#gambar16").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 8',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/72658a1b-c741-74fb-67a3-94e6d668deab.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp9() {
    document.getElementById('doorprizevalue').value = "9";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 9,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("9");
                
                $("#gambar9").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
                $("#gambar16").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 9',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/625647de-95c3-bd1a-09c6-dadcf82fa9f8.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp10() {
    document.getElementById('doorprizevalue').value = "10";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 10,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("10");
                
                $("#gambar10").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
                $("#gambar16").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 10',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/0fb582fe-69c7-70f4-a408-4e874db31fd1.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp11() {
    document.getElementById('doorprizevalue').value = "11";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 11,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("11");
                
                $("#gambar11").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
                $("#gambar16").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 11',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/8afa5e3b-9c74-6c83-fa67-3da40117da3e.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp12() {
    document.getElementById('doorprizevalue').value = "12";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 12,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("12");
                
                $("#gambar12").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
                $("#gambar16").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 12',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/7bf3c187-4fcd-d028-ef86-439176fd7fae.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp13() {
    document.getElementById('doorprizevalue').value = "13";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 13,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("13");
                
                $("#gambar13").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
                $("#gambar16").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 13',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/64b812fa-58fa-0068-726f-4d7cec51fc3d.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp14() {
    document.getElementById('doorprizevalue').value = "14";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 14,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("14");
                
                $("#gambar14").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar15").hide('');
                $("#gambar16").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 14',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/daf1ccee-401a-23e1-254f-454474dc3e63.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp15() {
    document.getElementById('doorprizevalue').value = "15";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 15,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("15");
                
                $("#gambar15").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar16").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 15',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/f7bf7aed-71fa-1238-cab4-aaade825f308.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp16() {
    document.getElementById('doorprizevalue').value = "16";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 16,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("16");
                
                $("#gambar16").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 16',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/0a71c5e9-4ae3-0fb8-845f-9635d0d68331.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp17() {
    document.getElementById('doorprizevalue').value = "17";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 17,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("17");
                
                $("#gambar17").show('');
                $("#gambar18").hide('');
                $("#gambar19").hide('');
                $("#gambar16").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 17',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/9c6c9623-7230-f508-e472-2faf9d5fd67d.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp18() {
    document.getElementById('doorprizevalue').value = "18";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 18,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("18");
                
                $("#gambar18").show('');
                $("#gambar17").hide('');
                $("#gambar19").hide('');
                $("#gambar16").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 18',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/b45c814c-3a40-ff7d-eba6-b680e2e341e8.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}
function dp19() {
    document.getElementById('doorprizevalue').value = "19";
    $.ajax({
        type: "GET",
        url: "/alreadywin/" + 19,
        success: function(data) {
            if (data.detail == null) {
                $("#btn_start").show('');
                $('#p1value').html("19");
                
                $("#gambar19").show('');
                $("#gambar17").hide('');
                $("#gambar18").hide('');
                $("#gambar16").hide('');
            
                $("#gambar1").hide('');
                $("#gambar2").hide('');
                $("#gambar3").hide('');
                $("#gambar4").hide('');
                $("#gambar5").hide('');
                $("#gambar6").hide('');
                $("#gambar7").hide('');
                $("#gambar8").hide('');
                $("#gambar9").hide('');
                $("#gambar10").hide('');
                $("#gambar11").hide('');
                $("#gambar12").hide('');
                $("#gambar13").hide('');
                $("#gambar14").hide('');
                $("#gambar15").hide('');
            }else{
                Swal.fire({
                    title: 'Pemenang sudah terpilih.',
                    text: 'Selamat kepada pemenang doorpirze 19',
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/292987bf-ac37-36d1-1cc3-fe6a0f7ced66.jpg',
                    imageWidth: 300,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  })
            }
        }
    });
}

function addshuffle() {
    id = $("#doorprizevalue").val();
    $.ajax({
        type: "GET",
        url: "/participantbyid/" + id,
        success: function(data) {
            if (data.detail == null) {
                Swal.fire('Data Participant kosong')
            }else{
                $("#edit-Items").modal('show');
                $("#modalshuffle").modal('hide');

                $("#form-create input[name=name_model]").val(data.detail.name);
                $("#form-create input[name=number_model]").val(data.detail.number);
                $("#form-create input[name=doorprize_model]").val(id);
                $("#form-create input[name=email_model]").val(data.detail.email);
                $("#form-create input[name=company_model]").val(data.detail.company);
            }
        }
    });
}

function cancelparticipant() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    id = $("#number_model").val();
    $.ajax({
        type: "DELETE",
        url: "/cancel/" + id,
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                setTimeout(function() {
                    location.reload();
                }, 1000);
                Swal.fire({
                    text: "Doorprize telah dibatalkan",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok",
                    customClass: {
                        confirmButton: "btn btn-danger"
                    }
                });
            }
        }
    });
}