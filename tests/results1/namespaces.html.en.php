<?php echo "<"; ?>?xml version="1.0" ?>
<?php echo "<"; ?>?xml-stylesheet href="chrome://global/skin/" type="text/css" ?>
<?php echo "<"; ?>?xml-stylesheet href="/myproject/images/css/test.css" type="text/css" ?>

<window id="wndUserResults" title="User Search Results" persist="screenX screenY width height" xmlns="http://www.mozilla.org/keymaster/gatekeeper/there.is.only.xul" xmlns:html="http://www.w3.org/1999/xhtml">
 
        <tree id="userSearchResults" flex="1" height="300" enableColumnDrag="true" ondblclick="parent.parent.userEditPopup();">
                <treecols>
                        <treecol flex="2" id="trcName" label="Name" primary="true" persist="width ordinal hidden" />
                        <splitter class="tree-splitter" />
                        <treecol flex="1" id="trcGroupName" label="Group Name" persist="width ordinal hidden" />
                </treecols>
                <treechildren>
                        <?php if ($this->options['strict'] || (is_array($t->sresult)  || is_object($t->sresult))) foreach($t->sresult as $id => $data) {?><treeitem>
                                <treerow>
                                        <treecell label="<?php echo htmlspecialchars($data->name);?>" />
                                        <treecell label="<?php echo htmlspecialchars($data->group_name);?>" />
                                        <treecell label="<?php echo htmlspecialchars($data->user_id);?>" />
                                </treerow>
                        </treeitem><?php }?>
                </treechildren>
        </tree>
        <?php echo $this->elements['test']->toHtmlnoClose();?>
            <?php echo $this->elements['test2']->toHtml();?>
            <html:table>
              <html:tr>
                <html:td>
                  <label style="text-align: left;" control="listItemSubCat" value="Item Subcategory" />
                </html:td>
             </html:tr>
            </html:table>
        </html:form>
        <?php echo $this->elements['atest']->toHtml();?>
        <!-- example of how to make the above work correctly.. -->
        <html:select name="atest">
            <?php if ($this->options['strict'] || (is_array($t->categories)  || is_object($t->categories))) foreach($t->categories as $data) {?><html:option value="<?php echo htmlspecialchars($data->value);?>" onselect="parent.onSelect_ProdCat();"><?php echo htmlspecialchars($data->name);?></html:option><?php }?>
        </html:select>
</window>