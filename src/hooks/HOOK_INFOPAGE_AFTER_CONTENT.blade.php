                    <x-admin.uriable
                        :inputBag="$inputBag"
                        :uriable="$chInfopage?? null"
                        :defaultUri="isset($chInfopage)? $chInfopage->defaultUri() : 'info/[id]'"
                    />
