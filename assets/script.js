document.addEventListener('DOMContentLoaded', (event) => {

    /* REPEATER ADD NEW OLD */
    // const addNewButtons = document.querySelectorAll('.leo_box .add-new');
    // for (const addNewButton of addNewButtons) {
    //     addNewButton.addEventListener('click', (e) => {
    //         e.preventDefault();

    //         const currentTableBody = addNewButton.parentElement.parentElement;
    //         const newRow = currentTableBody.querySelector('.tr').cloneNode(true);
    //         const newRowButton = newRow.querySelector('button');

    //         newRowButton.addEventListener('click', (e) => {
    //             newRowButton.parentNode.parentNode.remove();
    //         });
    //         currentTableBody.insertBefore(newRow, null)
    //     });
    // }

    const addNewButtons = document.querySelectorAll('.leo_box .add-new');
    for (const addNewButton of addNewButtons) {
        addNewButton.addEventListener('click', (e) => {
            e.preventDefault();

            const currentTableBody = addNewButton.parentElement.parentElement;
            requestElement(addNewButton.getAttribute('data-new-row'), addNewButton.getAttribute('data-field-id'), currentTableBody);

            // const newRowButton = currentTableBody.querySelector('button:last-child');
            // newRowButton.addEventListener('click', (e) => {
            //     e.preventDefault();
            //     newRowButton.parentNode.parentNode.remove();
            // });
        });
    }

    /* REPEATER REMOVE CURRENT */
    const removeButtons = document.querySelectorAll('.leo_box .remove-current');
    for (const removeButton of removeButtons) {
        removeButton.addEventListener('click', (e) => {
            removeButton.parentNode.parentNode.remove();
        });
    }

    /* CHOOSE IMAGE */
    const selectImageButtons = document.querySelectorAll('input.leo_media_manager_single');
    for (const selectImageButton of selectImageButtons) {
        selectImageButton.addEventListener('click', (e) => {
            e.preventDefault();
            const inputBox = selectImageButton.previousElementSibling;
            const imageBox = inputBox.previousElementSibling;
            let image_frame;
            if (image_frame) image_frame.open();
            image_frame = wp.media({
                title: 'Select Media',
                multiple: false,
                library: {
                    type: 'image'
                }
            });
            image_frame.on('close', function() {
                let selection = image_frame.state().get('selection');
                let gallery_ids = new Array();
                let my_index = 0;
                selection.each(function(attachment) {
                    gallery_ids[my_index] = attachment['id'];
                    my_index++;
                });
                const ids = gallery_ids.join(",");
                if (ids) {
                    inputBox.value = ids;
                    refreshImage(ids, imageBox);
                }
            });
    
            image_frame.on('open', function() {

                let selection = image_frame.state().get('selection');
                const id = jQuery(imageBox).val();
                const attachment = wp.media.attachment(id);
                attachment.fetch();
                selection.add(attachment ? [attachment] : []);
     
    
            });

            image_frame.open();

        });

    /* REMOVE IMAGE */
    const removeImageButtons = document.querySelectorAll('button.remove-image');
    for (const removeImageButton of removeImageButtons) {
        removeImageButton.addEventListener('click', (e) => {
            e.preventDefault();
            const inputBox = removeImageButton.previousElementSibling.previousElementSibling;
            const imageBox = inputBox.previousElementSibling;

            inputBox.value = "";
            imageBox.setAttribute('src', '');
        });
    }

    }

    
    function requestElement(child_fields, field_id, element) {
        let data = {
            action: 'leo_get_field',
            child_fields: child_fields,
            field_id: field_id
        };

        jQuery.get(ajaxurl, data, function(response) {
            if (response.success === true) {
                const divResponse = response.data.div;
                
                jQuery(element).append(divResponse);
                
                const respElement = document.createElement('div');
                respElement.innerHTML = divResponse;

                const wpEditors = respElement.querySelectorAll('textarea.wp-editor-area');
                for (const wpEditorItem of wpEditors) {
                    const wpEditorId = wpEditorItem.getAttribute('id');              
                    tinymce.execCommand( 'mceAddEditor', false, wpEditorId);
                }
            }
        });
    }
    
    /* UPDATE IMAGE */
    function refreshImage(the_id, element) {
        let data = {
            action: 'leo_get_image',
            id: the_id
        };
    
        jQuery.get(ajaxurl, data, function(response) {
            if (response.success === true) {
                jQuery(element).replaceWith(response.data.image);
            }
        });
    }


});
