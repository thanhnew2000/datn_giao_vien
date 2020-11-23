let newItems = false
let host_name = window.location.hostname
firebase.database().ref("phan_hoi_don_thuoc").on("child_added", function(snapshot) {
    if (newItems) {

        axios.post(url_get_info_phan_hoi, {
                'type': snapshot.val().type,
                'nguoi_phan_hoi_id': snapshot.val().nguoi_phan_hoi_id,
            })
            .then(function(response) {
                // alert(1)
                console.log(response.data)
                if(snapshot.val().type == 2){
                    var anh_nguoi_phan_hoi = response.data.anh;
                    var ten_nguoi_phan_hoi = 'Giáo viên: '+response.data.ten;
                    var class_trai_phai = 'm-messenger__message--out'
                }else{
                    var anh_nguoi_phan_hoi = response.data.avatar;
                    var ten_nguoi_phan_hoi = 'Học sinh: '+response.data.ten;
                    var class_trai_phai = 'm-messenger__message--in'

                }
                var class_phan_hoi_don = '#phan_hoi_don_'+snapshot.val().don_dan_thuoc_id
                console.log('apitsst', response.data,class_phan_hoi_don)
                let relativeTime = getMinimalisticRelativeTime(snapshot.val().created_at);
                var htmlPhanHoi = `

                <div class="m-messenger__wrapper">
                <div class="m-messenger__message ${class_trai_phai}">
                    <div class="m-messenger__message-body">
                        
                        <div class="m-messenger__message-content">
                            <div class="m-messenger__message-username">
                                ${ten_nguoi_phan_hoi}
                            </div>
                            <div class="m-messenger__message-text">
                            ${snapshot.val().noi_dung}
                            </div>
                        </div>
                        <span class="m-widget3__time">
                            ${relativeTime}
                        </span>
                    </div>
                </div>
            </div>
                   `
                   $(class_phan_hoi_don).append(htmlPhanHoi)
                   console.log($('.fix-scroll-bottom').height())
                //    $('.fix-scroll-bottom').scrollTop($('.fix-scroll-bottom').height())
                $('.fix-scroll-bottom').animate({ scrollTop:$('.fix-scroll-bottom').prop('scrollHeight')});
                   $('#preload').css('display','none')
                   $('.nhap_phan_hoi').val('')

            })
            .catch(function(error) {
                // handle error
                console.log(error);
            })
            .then(function() {
                // always executed
            });
    }
    // console.log(snapshot.val())
})
firebase.database().ref("phan_hoi_don_thuoc").once("value", function(snapshot) {
    newItems = true
})

// alert()
// db_phan_hoi_don_thuoc.on("value", (snap) => {
//     var res = Object.values(snap.val());
//     console.log(res);
//     var content = '';
//     var count = 0;
//     for (let i = res.length - 1; i >= 0; i--) {
//         if (res[i].don_dan_thuoc_id == '{{ Illuminate\Support\Facades\Auth::id() }}') {
// axios.get('https://httpbin.org/get')
// .then(function (response) {
//    console.log('apitsst',response.data)
// })
// .catch(function (error) {
//     // handle error
//     console.log(error);
// })
// .then(function () {
//     // always executed
// });
//             count = res[i].type == 1 ? ++count : count;
//             let relativeTime = getMinimalisticRelativeTime(res[i].created_at);
//             content += `
//                         <div data-id="${res[i].id}" 
//                              data-href="${res[i].route}" 
//                              data-type="${res[i].type}"
//                              onclick="linkTo(this)" 
//                              class="fc-event fc-event-external ${res[i].type == 1 ? 'fc-start m-fc-event--primary':''} m--margin-bottom-15 ui-draggable ui-draggable-handle item-notifi">
// 							 <div class="fc-title">
// 								<div class="fc-content"><span class="${res[i].type == 1 ? 'm--font-boldest':'m-section__sub'}">${res[i].title}</span><hr><span class="m--font-info">${relativeTime}</span></div>
// 							 </div>
// 						</div>
// 						`;
//         }
//     }
//     $('#box-notification').html(content);
//     var notifi_html = count ? `<span class="m-nav__link-badge m-badge m-badge--danger">${count}+</span>` : '';
//     $('#count_number_notifi').html(notifi_html);
// });

// function linkTo(element) {
//     let data_id = element.getAttribute('data-id');
//     let data_href = element.getAttribute('data-href');
//     let data_type = element.getAttribute('data-type');
//     let str_after_replace = data_href.replace('http://', '');
//     var href = str_after_replace.substr(str_after_replace.indexOf("/"), str_after_replace.length - 1)
//     window.location.href = href;

//     if(data_type == 1 || data_type == '1'){
//         isRead(data_id, 2);
//     }
// }

// function isRead(id, type){
//     firebase.database().ref('notification/' + id + '/type').set(type)

//     axios.post("{{ route('notification.changeType') }}", {
//         "_token": "{{ csrf_token() }}",
//         "id": id,
//         "type":type
//     })
//     .then(function (response) {
//     })
//     .catch(function (error) {
//     });
// }

// function  getMinimalisticRelativeTime(time) {
//     return moment(time).fromNow();       
// }

// $('#m_topbar_notification_icon').on('click',function(){
//     $('#count_number_notifi').html('');
//     db.once('value', function(snap) {
//         var res = Object.values(snap.val());
//         res.forEach(element => {
//             if(element.user_id == '{{ Illuminate\Support\Facades\Auth::id() }}'){
//                 firebase.database().ref('notification/' + element.id + '/bell').set(2)
//             }
//         });
//     });
// });