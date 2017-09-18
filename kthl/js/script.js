
            $(function () {
                $('#register_form').submit(function (event) {
                    event.preventDefault();
                    var data = new FormData(this);
                    var url = "process_employee_register.php";
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (data)
                        {
                            console.log(data);
                            var resp = JSON.parse(data);
                            var responseCode = resp.responseCode;
                            var errMessage = resp.errMessage;
                            if (responseCode == 1) {
                                alert("successful");
                                setTimeout(function () {
                                    window.location = 'index.php';
                                }, 1000);
                            } else {
                                alert("failed");
                                setTimeout(function () {
                                }, 3000);

                            }
                        }
                    });
                    return false;
                });

                
            });
        
