<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<main class="min-h-screen">

    <section class="bg-[#F7F6F2] lg:py-12">
        <div class="p-4 py-8 lg:p-12">
            <div class="breadcrumbs text-sm mb-2">
                <ul class="flex justify-center">
                    <li><a href="/" class="text-black">Home</a></li>
                    <li class="text-black">Contact</li>
                </ul>
            </div>

            <div class="text-2xl lg:text-4xl font-bold text-center text-black ">
                Contact Us
            </div>
        </div>
    </section>
    <section class="p-4 py-8 lg:p-12 xl:p-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <!-- Google Map -->
            <div class="h-80 lg:h-auto">
                <iframe class="w-full h-full rounded-lg shadow-lg"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.3987463305502!2d76.94362677480845!3d11.00867978915455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8591ebb60007b%3A0x12d607be2eb333fd!2sFather%20Randy%20St%2C%20R.S.%20Puram%2C%20Coimbatore%2C%20Tamil%20Nadu%20641002!5e0!3m2!1sen!2sin!4v1743405274988!5m2!1sen!2sin"
                    allowfullscreen="" loading="lazy">
                </iframe>
            </div>

            <!-- Contact Form -->
            <div class="bg-[#F7F7F7] p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-2 text-black">Get In Touch With Us
                </h2>
                <div class="mb-4">If you wish to directly reach us, Please fill out the form below -
                </div>
                <form id="contact-form" class="space-y-4">

                    <!-- Name -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Name</label>
                        <input id="your-name" type="text" name="name"
                            class="w-full px-4 py-2 bg-white border rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                            placeholder="Enter your name" required>
                    </div>

                    <!-- Mobile Number -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Mobile Number</label>
                        <input id="your-phone" type="tel" minlength="10" maxlength="10" name="phone"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                            class="w-full bg-white px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                            placeholder="Enter your mobile number" required>
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Email Address</label>
                        <input id="your-email" type="email" name="email"
                            class="w-full px-4 py-2 bg-white border rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                            placeholder="Enter your email" required>
                    </div>

                    <!-- Comments -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Comments</label>
                        <textarea id="your-message" name="comments" rows="4"
                            class="w-full bg-white resize-none px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                            placeholder="Write your message..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit"
                            class="bg-[#F78D1E] cursor-pointer text-white font-bold py-2 px-6 rounded-lg hover:bg-[#F78D1E] transition duration-300">
                            Submit
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </section>

    <section>
        <div class="px-4 lg:px-12 xl:px-16 mb-12">
            <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3 bg-[#F7F6F2] p-8 rounded-md">
                <div class="flex items-center gap-4">
                    <div class="flex items-center border-2 border-[#F78D1E] rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 fill-[#F78D1E]">
                            <path fill-rule="evenodd"
                                d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                    <div>12 & 13, Father Randy Street, R.S. Puram, Coimbatore - 641002</div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="flex items-center border-2 border-[#F78D1E] rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 fill-[#F78D1E]"">
  <path fill-rule=" evenodd"
                            d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                            clip-rule="evenodd" />
                        </svg>


                    </div>
                    <div>Call us:
                        <br>+91 8056894111
                    </div>
                </div>


                <div class="flex items-center gap-4">
                    <div class="flex items-center border-2 border-[#F78D1E] rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 fill-[#F78D1E]"">
  <path d=" M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                        <path
                            d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                        </svg>


                    </div>
                    <div>Mail us: <br>
                        <span class="break-all">krishacharitabletrustcbe@gmail.com</span></div>
                </div>


                <!-- <div class="flex items-center gap-4">
                    <div class="flex items-center border-2 border-[#F78D1E] rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 fill-[#F78D1E]"">
                    <path fill-rule=" evenodd"
                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z"
                            clip-rule="evenodd" />
                        </svg>


                    </div>
                    <div>Open time: <br>
                        24x7</div>
                </div> -->
            </div>
        </div>
    </section>



</main>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault();

    const apiEndpoint =
        "https://krishatrust.org/wp-json/contact-form-7/v1/contact-forms/46/feedback";
    const formData = new FormData();

    formData.append("your-name", document.getElementById("your-name").value);
    formData.append("your-phone", document.getElementById("your-phone").value);
    formData.append("your-email", document.getElementById("your-email").value);
    formData.append("your-message", document.getElementById("your-message").value);
    formData.append("_wpcf7_unit_tag", "wpcf7-f46-o1"); // Replace with actual unit tag if needed

    fetch(apiEndpoint, {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "mail_sent") {
                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Your message has been sent successfully!",
                });

                // Reset the form after submission
                document.getElementById("contact-form").reset();
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong. Please try again.",
                });
            }
        })
        .catch(error => {
            console.error("Error:", error);
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Failed to submit the form. Please try again later.",
            });
        });
});
</script>



<?php get_footer(); ?>