import './bootstrap';
import './notify';
import Echo from 'laravel-echo'

const userId = document.querySelector('meta[name="user-id"]').getAttribute('content');

const groupId = document.querySelector('meta[name="group-id"]').getAttribute('content');
let e = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001'
})


/*e.channel('chan-demo')
    .listen('.PostEvent', function (e) {

        console.log(e)
    })
*/


e.private('receptionist.' + userId)
    .listen('.MessageEvent', function (e) {
        $.notify({
            message: 'Vous avez reçu une nouvelle notif'
        })
        console.log('MessageEvent', e)
    })



e.join('group.' + groupId)
    .here(function (users) {
        console.log('here', users)
    })
    .joining(function (user) {
        /* $.notify({
             message: user.name + 'vient de rejoindre le groupe'
          })
        */
        console.log('joining', user)
    })
    .leaving(function (user) {
        /*  $.notify({
             message: user.name + 'vient de quitter le groupe'
         })
        */
        console.log('leaving', user)
    })
    .listen('.GroupWizzEvent', function (e) {
        if (e.sender_id !== parseInt(userId)) {
            $.notify({
                message: 'vous avez une nouvelle notification'
            })
        }

        console.log('GroupWizzEvent', e)
    })



