<?php
/**
 * Page section: form.
 *
 * @package devwp
 * @since 1.0.0
 */
?>

<section class="section section--contact-form">
    <div class="container">
        <div class="content-holder contact-form">
            <div class="row contact-form__content">
                <div id="contact-form" class="contact-form-content">
                    <?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]'); ?>
                </div>
                <div class="contact-form-general">
                    <div class="form-general-info">
                        <?php if ( have_rows( 'contact_address' ) ) : ?>
                           <?php while ( have_rows( 'contact_address' ) ) : the_row(); ?>
                               <h2 class="form-general-heading"><?php esc_html( the_sub_field( 'contact_address_title' ) ); ?></h2>
                               <div class="form-general-address">
                                   <div class="form-general-organization-name"><?php esc_html( the_sub_field( 'contact_address_organization' ) ); ?></div>
                                   <address class="form-general-physical-address"><?php esc_html( the_sub_field( 'contact_address_physical_location' ) ); ?></address>
                               </div>
                               <div class="form-general-phone">
                                   <div class="form-general-phone-number"><?php esc_html( the_sub_field( 'contact_address_phone' ) ); ?></div>
                               </div>
                           <?php endwhile; ?>
                       <?php endif; ?>
                    </div>
                    <div class="form-general-members">
                        <?php if ( have_rows( 'contact_members' ) ) : ?>
                            <?php while ( have_rows( 'contact_members' ) ) : the_row(); ?>
                                <h2 class="form-general-heading"><?php esc_html( the_sub_field( 'contact_members_title' ) ); ?></h2>
                                <div class="form-general__members">
                                    <?php $num_of_members = 5; ?>
                                    <?php for ($i = 1; $i <= $num_of_members; $i++) : ?>
                                        <div class="form-general-member"><?php esc_html( the_sub_field( 'contact_members_'.$i ) ); ?></div>
                                    <?php endfor; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
