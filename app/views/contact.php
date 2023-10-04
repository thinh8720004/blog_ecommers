<section>
      <div class="bg_in">
         <div class="contact_form">
            <div class="contact_left">
               <div class="ch-contacts-details">
                  <ul class="contact-list">
                     <li class="addr">
                        <strong class="title">Our address</strong>
                        <p>
                           <em><strong>Interior Thinh Tu</strong></em><br />
                           <em> Da Nang, Viet Nam<br />
                              Phone : 0123 456 789<br />
                              <!--   <strong>Điện thoại: <span style="color:#FF0000"></span></strong></em> -->
                        </p>
                     </li>
                  </ul>
                  <!--   <div class="hiring-box">
                        <strong class="title">Chào bạn!</strong>
                        
                        <p>Mọi thắc mắc bạn hãy gửi về mail của chúng tôi <strong>thietbivanphong@gmail.com</strong> chúng tôi sẽ giải đáp cho bạn.</p>
                        
                        <p><a href="." class="arrow-link"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Về trang chủ</a></p>
                        
                        </div> -->
               </div>
            </div>
            <div class="contact_right">
               <div class="form_contact_in">
                  <div class="box_contact">
                     <form name="FormDatHang" method="post" action="gio-hang/">
                        <div class="content-box_contact">
                           <div class="row">
                              <div class="input">
                                 <label>First and last name: <span style="color:red;">*</span></label>
                                 <input type="text" name="txtHoTen" required class="clsip">
                              </div>
                              <div class="clear"></div>
                           </div>
                           <!---row---->
                           <div class="row">
                              <div class="input">
                                 <label>Phone: <span style="color:red;">*</span></label>
                                 <input type="text" name="txtDienThoai" required onkeydown="return checkIt(event)" class="clsip">
                              </div>
                              <div class="clear"></div>
                           </div>
                           <!---row---->
                           <div class="row">
                              <div class="input">
                                 <label>Address: <span style="color:red;">*</span></label>
                                 <input type="text" name="txtDiaChi" required class="clsip">
                              </div>
                              <div class="clear"></div>
                           </div>
                           <!---row---->
                           <div class="row">
                              <div class="input">
                                 <label>Email: <span style="color:red;">*</span></label>
                                 <input type="text" name="txtEmail" onchange="return KiemTraEmail(this);" required class="clsip">
                              </div>
                              <div class="clear"></div>
                           </div>
                           <!---row---->
                           <div class="row">
                              <div class="input">
                                 <label>Content: <span style="color:red;">*</span></label>
                                 <textarea type="text" name="txtNoiDung" class="clsipa"></textarea>
                              </div>
                              <div class="clear"></div>
                           </div>
                           <!---row---->
                           <div class="row btnclass">
                              <div class="input ipmaxn ">
                                 <input type="submit" class="btn-gui" name="frmSubmit" id="frmSubmit" value="Send the contact">
                                 <input type="reset" class="btn-gui" value="Retype">
                              </div>
                              <div class="clear"></div>
                           </div>
                           <!---row---->
                           <div class="clear"></div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
