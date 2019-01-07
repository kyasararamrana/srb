/*---------------------

1. Logo
2. Category
3. Product
4. Addons
5. Banner
6. Slider
7. Edit Profile
8. Change Password

---------------------*/




/*====================
    1. Logo (Index) 
====================*/


$(document).ready(function () {
    $('#logoForm').bootstrapValidator({

        fields: {

            image: {
                validators: {
                    notEmpty: {
                        message: 'Image is required'
                    },
                    regexp: {
                        regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
                        message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
                    }
                }
            },
            favicon: {
                validators: {
                    notEmpty: {
                        message: 'Favicon is required'
                    },
                    regexp: {
                        regexp: "(.*?)\.(png|jpeg|jpg|gif|ico)$",
                        message: 'Uploaded file is not a valid. Only png,jpg,jpeg,ico,gif files are allowed'
                    }
                }
            },
            title: {
                validators: {
                    notEmpty: {
                        message: 'Title is required'
                    }
                }
            },
            keywords: {
                validators: {
                    notEmpty: {
                        message: 'Keywords is required'
                    }
                }
            },
            description: {
                validators: {
                    notEmpty: {
                        message: 'Description is required'
                    }
                }
            }
        }
    })

});




/*====================
    2. Category
====================*/

$(document).ready(function () {
    $('#addCategoryForm').bootstrapValidator({

        fields: {

            name: {
                validators: {
                    notEmpty: {
                        message: 'Name is required'
                    },
                    regexp: {
                        regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                        message: 'Question wont allow <> [] = % '
                    }
                }
            }
        }
    })

});




/*====================
    3. Product 
====================*/

$('#addProductForm').bootstrapValidator({

    fields: {

        name: {
            validators: {
                notEmpty: {
                    message: 'Name is required'
                },
                regexp: {
                    regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                    message: 'Question wont allow <> [] = % '
                }
            }
        }
    }
    })

});




/*====================
    4. Addons 
====================*/






/*====================
    5. Banner 
====================*/

$(document).ready(function () {
    $('#addBannerForm').bootstrapValidator({

        fields: {
            image: {
                validators: {
                    notEmpty: {
                        message: 'Image is required'
                    },
                    regexp: {
                        regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
                        message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
                    }
                }
            }
        }
    })

});




/*====================
    6. Slider 
====================*/






/*====================
    7. Edit Profile 
====================*/

$(document).ready(function() {
    $('#editProfileForm').bootstrapValidator({

        fields: {

            name: {
                validators: {
                    notEmpty: {
                        message: 'Name is required'
                    },
                    regexp: {
                        regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                        message: 'Name wont allow <> [] = % '
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Email is required'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                        message: 'Please enter a valid email address. For example johndoe@domain.com.'
                    }
                }
            },
            number: {
                validators: {
                    notEmpty: {
                        message: 'Mobile Number is required'
                    },
                    regexp: {
                        regexp: /^[0-9]{10,14}$/,
                        message: 'Mobile Number must be 10 to 14 digits'
                    }

                }
            },
            location: {
                validators: {
                    notEmpty: {
                        message: 'Location is required'
                    }
                }
            },
            image: {
                validators: {
                    notEmpty: {
                        message: 'Image is required'
                    },
                    regexp: {
                        regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
                        message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
                    }
                }
            }
        }
    })

});




/*====================
8. Change Password 
====================*/

$(document).ready(function() {
    $('#changePasswordForm').bootstrapValidator({

        fields: {

            oldpassword: {
                validators: {
                    notEmpty: {
                        message: 'Password is required'
                    },
                    regexp: {
                        regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                        message: 'Password wont allow <> [] = % '
                    }
                }
            },
            newpassword: {
                validators: {
                    notEmpty: {
                        message: 'Password is required'
                    },
                    regexp: {
                        regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                        message: 'Password wont allow <> [] = % '
                    }
                }
            },
            confirmnewpassword: {
                validators: {
                    notEmpty: {
                        message: 'Confirm Password is required'
                    },
                    identical: {
                        field: 'password',
                        message: 'Password and Confirm Password do not match'
                    }
                }
            }
        }
    })

});