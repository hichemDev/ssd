<?php 


add_filter("login_redirect", "roles_login_redirect", 10, 3);

function roles_login_redirect($redirect_to, $request, $user)
{
if (is_array($user->roles))
if (in_array('administrator', $user->roles)) return admin_url(); // Page -> Tableau de bord
elseif (in_array('author', $user->roles)) return home_url('/accueil'); // Page -> Nouvel article
elseif(in_array('subscriber', $user->roles)) return home_url('/vendeur'); 

return home_url(); // Les abonnés sont redirigés en Page d'accueil
}

// Logout Redirect

function hich_logout_redirect()
{
wp_redirect(home_url());
exit;
}

add_action('wp_logout', 'hich_logout_redirect');


 ?>