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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/119b692e-23b3-6be5-bce6-14d325e185b1.jpg',
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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/1ad7b445-9f30-ec14-9cf9-4026aea304d0.jpg',
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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/1751d284-3090-d42d-368a-0c93ba856c5b.jpg',
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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/c6a3c1d2-4548-43c2-fdf8-2350b28ace50.jpg',
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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/f7e45387-2534-8955-d258-ff9397a88a56.jpg',
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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/7e8750da-6cbd-1535-b4dc-070603675efc.jpg',
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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/7fc34e92-5bd0-e4db-45e0-977b640b55e7.jpg',
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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/c88ceeb3-aa82-0e3d-a8e3-1a3f2ea77f60.jpg',
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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/b07dc5de-8b3a-21d1-02a0-550d5b55b051.jpg',
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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/18c524a3-cdf9-013b-6a72-ee35b5837979.jpg',
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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/d4098d1d-c5b5-acbb-7e91-485c14c61fe7.jpg',
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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/369f5c68-2345-ae99-0b5b-11fdcbad6e44.jpg',
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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/3e0030ff-2243-d976-3c9e-42af26daa109.jpg',
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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/2591d0fd-acd1-f321-69e3-4b0bb7efe901.jpg',
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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/35e82277-cc39-37ae-2f28-80c77d57861e.jpg',
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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/aea8ea9a-2fef-6dd9-29cc-d258f5eaede5.jpg',
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
                    imageUrl: 'https://mcusercontent.com/67df7fb0d69931daec95fbd01/images/67ba8709-10c5-cdd9-6639-d543c5eb5a30.jpg',
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